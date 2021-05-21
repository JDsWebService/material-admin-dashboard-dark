# Laravel Admin Dashboard - Material Dark

This Laravel package uses the admin dashboard from Creative Tim. More information about this specific template can be found at: https://www.creative-tim.com/product/material-dashboard-dark

As of right now there are only views associated with this project. Future releases will include Login Auth Routes, Views, and Controllers as well as some minor changes to the Users table in the database.

## Installation Instructions

1. Run `composer require jdswebservice/material-admin-dashboard-dark`
2. Publish all assets by running: `php artisan vendor:publish --provider="JDsWebService\AdminDashboardMaterialDark\DashboardServiceProvider" --tag=public`

## Extending The Template

To extend the template on your blade view, you can use the following snippet of code:

```
@extends('layouts.admin-dashboard')
```

You should also define a page title as well. You can do this by using a one-line section blade statement.

```
@section('title', 'YOUR_TITLE_HERE')
```

All content should be placed in a section called `content` as shown below.

```
@section('content')
Your Content Here
@endsection
```