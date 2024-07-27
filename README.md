#Class Manager

For dev commands are:
```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm start(php artisan serve && vite)
```
#Docs:
## Account

### Methods
- Register new account
- Login with account
### Properties
- Profile
- Dashboard

## Clent
### Methods
- List all clients
- Create new client
- Update an client
### Properties
- Full name
- Login Cod.
- ID
- Status

## DailyClass
- List of presence
- Date

## Presence
- Clent
- Checkin
- Checkout
- Class
- Type
- Position
