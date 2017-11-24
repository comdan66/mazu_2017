<?php defined ('BASEPATH') OR exit ('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 * @link        http://www.ioa.tw/
 */

class Platform extends Site_controller {

  public function __construct () {
    parent::__construct ();
    $this->load->library ('fb');
  }
  public function fb_sign_in () {

    if (!(Fb::login () && ($me = Fb::me ()) && ((isset ($me['name']) && ($name = $me['name'])) && (isset ($me['email']) && ($email = $me['email'])) && (isset ($me['id']) && ($id = $me['id'])))))
      return $this->set_frame_path ('frame/pure')
                  ->add_hidden (array ('id' => '_url', 'value' => base_url ()))
                  ->add_hidden (array ('id' => '_user', 'data-val' => ''))
                  ->add_hidden (array ('id' => '_flash_danger', 'value' => 'Facebook 登入錯誤，請通知程式設計人員!(1)'))
                  ->load_view ();

    if (!($user = User::find ('one', array ('conditions' => array ('uid = ?', $id)))))
      if (!User::transaction (function () use (&$user, $id, $name, $email) { return verifyCreateOrm ($user = User::create (array_intersect_key (array ('uid' => $id, 'name' => $name, 'email' => $email), User::table ()->columns))); }))
        return $this->set_frame_path ('frame/pure')
                    ->add_hidden (array ('id' => '_url', 'value' => base_url ()))
                    ->add_hidden (array ('id' => '_user', 'data-val' => ''))
                    ->add_hidden (array ('id' => '_flash_danger', 'value' => 'Facebook 登入錯誤，請通知程式設計人員!(2)'))
                    ->load_view ();

    $user->name = $name;
    $user->email = $email;
    $user->login_count += 1;
    $user->logined_at = date ('Y-m-d H:i:s');

    if (!User::transaction (function () use ($user) { return $user->save (); }))
      return $this->set_frame_path ('frame/pure')
                  ->add_hidden (array ('id' => '_url', 'value' => base_url ()))
                  ->add_hidden (array ('id' => '_user', 'data-val' => ''))
                  ->add_hidden (array ('id' => '_flash_danger', 'value' => 'Facebook 登入錯誤，請通知程式設計人員!(3)'))
                  ->load_view ();

    Session::setData ('user_id', $user->id);
    return $this->set_frame_path ('frame/pure')
                ->add_hidden (array ('id' => '_url', 'value' => base_url (implode ('/', func_get_args ()))))
                ->add_hidden (array ('id' => '_user', 'data-val' => json_encode (array (
                                    'id' => $user->id,
                                    'uid' => $user->uid,
                                    'name' => $user->name,
                                    'email' => $user->email,
                                    'login_count' => $user->login_count,
                                    'logined_at' => $user->logined_at->format ('Y-m-d H:i:s'),
                                  ))))
                ->add_hidden (array ('id' => '_flash_info', 'value' => '使用 Facebook 登入成功!'))
                ->load_view ();
  }

  public function logout () {
    Session::setData ('user_id', 0);
    return $this->set_frame_path ('frame/pure')
                ->set_method ('fb_sign_in')
                ->add_hidden (array ('id' => '_url', 'value' => base_url ()))
                ->add_hidden (array ('id' => '_user', 'data-val' => ''))
                ->add_hidden (array ('id' => '_flash_info', 'value' => '登出成功'))
                ->load_view ();
  }
}
