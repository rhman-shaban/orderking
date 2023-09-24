# OrderKing Task

## answer question

### What is SaaS?
        - SaaS stands for Software as a Service. It is a cloud computing model where software applications are hosted and provided to customers over the internet on a subscription basis.
        Users access these applications through web browsers,
        eliminating the need for local installations and maintenance. SaaS providers handle infrastructure, maintenance, and updates,
        allowing users to focus on using the software rather than managing it.

### Does a SaaS-Webapp require the multi-database approach?

        - The use of a multi-database approach in a SaaS web application depends on various factors such as scalability, data isolation,
        and tenant requirements. While it's not strictly required for all SaaS applications, 
        it can be beneficial in scenarios where tenants need complete data isolation, 
        and the application needs to scale efficiently. 
    
### What is multi tenancy?
        - Multi-tenancy is a software architecture where a single instance of an application or system serves multiple clients or tenants, 
        with each tenant having its own isolated data and configurations.
        This allows multiple users or organizations to use the same application while keeping their data and settings separate.
        It's a key architectural concept in SaaS, allowing shared resources to be used efficiently while maintaining data privacy and security for each tenant.


## Which multi tenancy approach would you use for our project? (single or multi-database)

        - For our project, implementing a multi-database approach would likely be more suitable, especially if you have multiple merchants or tenants. In this approach, 
        each tenant (merchant) has its own separate database,
        providing complete data isolation and security. This is particularly important when different tenants should not have access to each other's data.
        It also allows for better scalability as you can distribute the database load across different databases. However, 
        the choice between single-database and multi-database multi-tenancy may not be critically significant for our project


## Dfor run project:

- git clone repository
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate --seed
- npm install && npm run dev
- php artisan serve


## Development Stack

### Backend

- PHP 8.1 
- Laravel 10
- MySQL 8

### Frontend
- inertiajs
- HTML
- CSS
- JavaScript


## Contacts
- [Email:Abdulrhman Shaban](abdulrhmanshaban87@gmail.com)
