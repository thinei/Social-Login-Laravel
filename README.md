# Social-Login-Laravel

Login users into app using social profiles like Facebook, Google and Github.

   Make apps for desired social feaure. In callback/redirect url of the app put as following REDIRECT.



_First, You need to create projects in google, facebook and github._

- google    -  https://console.developers.google.com/   

- Facebook  -  https://developers.facebook.com/

- github    -  https://github.com/settings/developers



__In .env file add__

```

FB_CLIENT_ID = *****
FB_CLIENT_SECRET = *****
FB_REDIRECT = 'http://localhost:8000/login/callback/facebook'

G+_CLIENT_ID = *****
G+_CLIENT_SECRET = *****
G+_REDIRECT = 'http://localhost:8000/login/callback/google'

GITHUB_CLIENT_ID = *****
GITHUB_CLIENT_SECRET = *****
GITHUB_REDIRECT = 'http://localhost:8000/login/callback/github'

```

### Commands to Run

```
composer install
php artisan key:generate
php artisan make:auth
php artisan migrate
php artisan serve

```
