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

Displays a error box with close button

    Alert::error("Youpi !")->close()

## Breadcrumbs

You can display a simple breadcrumb.

    Breadcrumb::create()->add("Home", "/")->add("News", "/news")->add("My News")

## Dropdowns

You can display dropdowns with Dropdown class.

    Dropdown::create("Admin")
        ->addText("Header 1")
        ->addLink("Link 1", "/edit")
        ->addLink("Link 2", "/delete")
        ->addDivider()
        ->addLink("Link 4", "/delete")

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
