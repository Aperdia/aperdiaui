# AperdiaUI

This package includes UI modules of Bulma for a [Laravel 5.5](http://www.laravel.com) project.

### Configuration

Then you can add theses aliases in your `app/config/app.php`:

    'Alert'           => 'Aperdia\AperdiaUI\Alert',
    'Breadcrumb'      => 'Aperdia\AperdiaUI\Breadcrumb',
    'Form'            => 'Aperdia\AperdiaUI\Form'

    'Aperdia\\AperdiaUI\\Provider\\AperdiaUIServiceProvider'

---

## Alerts

You can display alerts with Alert class, you can choose design from Bootstrap or from your personal css.

Displays a alert box with class "alert-success".

    Alert::success("Youpi !")
    <div class="alert alert-success">Youpi !</div>

Displays a alert box with close button

    Alert::success("Youpi !")->close()
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Youpi !
    </div>

## Breadcrumbs

You can display a simple breadcrumb.

    Breadcrumb::create()->add("Home", "/")->add("News", "/news")->add("My News")
    <ul class="breadcrumb"><li><a href="/">Home</a></li><li><a href="/news">News</a></li><li>My News</li></ul>

## Dropdowns

You can display dropdowns with Dropdown class.

Display a simple dropdown with two links.

    Dropdown::create()->addLink("Link 1", "/edit")->addLink("Link 2", "/delete")

    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
            Action
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="/edit">Link 1</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="/delete">Link 2</a></li>
        </ul>
    </div>

Display a dropdown with four links, a divider and two headers.

    Dropdown::create("Admin")
        ->addHeader("Header 1")
        ->addLink("Link 1", "/edit")
        ->addLink("Link 2", "/delete")
        ->addDivider()
        ->addHeader("Header 2")
        ->addDisabled("Disabled link")
        ->addLink("Link 4", "/delete")

    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
            Admin
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation" class="dropdown-header">Header 1</li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="/edit">Link 1</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="/delete">Link 2</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation" class="dropdown-header">Header 2</li>
            <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled Link</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="/delete">Link 4</a></li>
        </ul>
    </div>

## Form

### Input for group form

Input with type text, url, email...

    Form::inputGroup($type_input, $name_input, $title, $value, $errors_from_Laravel, $attributes, $help)

Input with translation

    Form::inputMultiLanguageGroup($languages, $type_input, $name_input, $title, $value, $errors_from_Laravel, $attributes, $help)

Select

    Form::selectGroup($name_input, $title, $list, $value, $errors_from_Laravel, $attributes, $help)

Textarea

    Form::textareaGroup($name_textarea, $title, $value, $errors_from_Laravel, $attributes, $help)

Textarea with translation

    Form::textareaMultiLanguageGroup($languages, $name_textarea, $title, $value, $errors_from_Laravel, $attributes, $help)

Checkbox

    Form:::checkboxGroup($name_checkbox, $title, $value, $input, $errors_from_Laravel, $attributes, $help)

Input radio

    Form::radioGroup($name_radio, $title, $choices, $value, $errors_from_Laravel, $attributes, $help)

Submit

    Form::submitGroup($options, $attributes)
