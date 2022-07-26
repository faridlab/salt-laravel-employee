# Salt Laravel Employee

General information about this package.

## Installation

To install this package, please run this command below:
```$ composer require faridlab/salt-laravel-employee```

## Using this package

Information about using this package

### Publishing Configurations

To publish the config file of our package, run the following command:

```$ php artisan vendor:publish --tag=employee-config```

This will add a new ```employee.php``` file in the config directory.

### Publishing Migrations and Seeds

To publish the migration file, run the following command:

```$ php artisan vendor:publish --tag=employee-migrations```

To publish the seeder file, run the following command:

```$ php artisan vendor:publish --tag=employee-seeds```

Next, edit the .env file with your database credentials and run the following command to execute the migrations:

```$ php artisan migrate```

Run the command to seed the database with some random data:

```$ php artisan db:seed --class=employeeSeeder```

## Contributing

Information about contributing to this package.
