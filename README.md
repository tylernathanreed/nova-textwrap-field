# Text Wrap Field for Laravel Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/reedware/nova-textwrap-field.svg?style=flat-square)](https://packagist.org/packages/reedware/nova-textwrap-field)
[![Total Downloads](https://img.shields.io/packagist/dt/reedware/nova-textwrap-field.svg?style=flat-square)](https://packagist.org/packages/reedware/nova-textwrap-field)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require reedware/nova-textwrap-field
```

## Usage

Create a new field like you would any other field:

```php
<?php

namespace App\Nova;

use Reedware\NovaTextwrapField\TextWrap;

class MyResource extends TextFilter
{
    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request, $query, $value)
    {
        return [
            TextWrap::make('My Field', my_field')
        ];
    }
}
```

## Options

The `TextWrap` field extends the default `TextArea` field, so any options typically available on `TextArea` are also availble on `TextWrap`. Additionally, the `TextWrap` field is configured to show on the Index page by default (whereas `TextArea` does not).

There are two additional options:
* Markdown: `TextWrap::make(...)->asMarkdown()` will parse and display the contents are markdown
* Max Width: `TextWrap::make(...)->withMeta('maxWidth' => '...')` will enforce a maximum width on the field content

## Apperance

Here's an example of how I've used this in the wild:

<picture>
