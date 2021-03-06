# WP REST User Lite

[![Star IT Ltd](https://staritltd.com/wp-content/uploads/2019/10/Web_Logo_of_Star_IT_158x80.png)](https://staritltd.com)

WP REST User Lite adds in the 'User Registration' or 'Retrieve Password' function for WP REST API, without all the bloats.

## Description

If you wish to 'Register User' or 'Retrieve Password' using REST API, _without_ exposing Administrator credentials to the Front End application, you are at the right place. Since WordPress 4.7, REST API was natively included in WordPress.

In order to 'Register User' or 'Retrieve Password', the authentication for a user with 'Administrator' role is required. While this is a delibrately done for security reasons, such implementation makes it very hard for Front End applications to implement a simple 'Register' or 'Sign Up' function.

This plugin fullfills such requirement by extending the existing WordPress REST API endpoints.

## Usage

### Register a User

To Register a User using REST API, send a `POST` request to `/wp-json/wp/v2/users/register`, with a **JSON body** (Set header: content-type: application/json):
`

```json
{
  "username": "your-username",
  "email": "username@test.com",
  "password": "0000"
}
```

In addition the above fields, firstname, lastname & roles (only subscriber and contributor) optional fields are supported.

If successful, you should receive the following response

```json
{
  "code": 200,
  "id": 13,
  "message": "User 'your-username' Registration was Successful"
}
```

To perform further actions after user is registered, write and add_action:

```php
add_action('wp_rest_user_user_register', 'user_registered'); function user_registered($user) { // Do Something }
```

### Reset Password

To Retrieve Password using REST API, send a `POST` request to ``/wp-json/wp/v2/users/lost-password`, including a **JSON body** (Set header: content-type: application/json):

```json
{ "user_login": "username@test.com" }
```

`user_login` can be either user's username or email.

If successful, you should receive the following response

```json
{ "code": 200, "message": "Reset Password link has been sent to your email." }
```

## Installation

1. Upload `wp-rest-user` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

## Frequently Asked Questions

- Why do I need WP REST User?

If you're planning on using your WordPress website as a Backend, and you're consuming RESTful api, you'll most probably need to Register User via REST API. This is precisely what this plugin does.

- Is it secure?

Great question! For the time being, this plugin only allows registering user as 'subscriber' or 'contributor' role. 'Subscriber' role has very limited capability in terms what WordPress allows him/her to do. From our perspective, subscribers are quite harmless.

- Does it work with WooCommerce?

Another great question! By default, WordPress registers new user as 'subscriber', while WooCommerce registers new user as 'customer'.
If you have WooCommerce installed and activated on your WordPress website, this plugin will automatically register user as 'customer' as well.

- There's a bug, what do I do?

File a Github Issue

## Changelog

### 1.0.0

1. Based on WP Rest User 1.4.3
2. Removed Fremius and other useless stuffs.
3. Added firstname and lastname fields.

## Upgrade Notice

If you are currently using WP Rest User, you must uninstall it first before using WPRest User Lite.

## Contribute

Contribution of any kind is welcome. Just open a PR!

## Contact

Reach me out at kuasha420.github.io
