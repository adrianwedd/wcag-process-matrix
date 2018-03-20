# WCAG Process Matrix

This originated in me being frustrated by not seeing the title for success criteria in [Accessibility Responsibility Breakdown](https://www.w3.org/community/wai-engage/wiki/Accessibility_Responsibility_Breakdown) and then all hell broke loose because I wanted to be able to tweak things around.

## Aim of this project

1. easy creation of any type of tables
2. copy-pasting should easily make it possible to create sortable/filterable ODS tables.

## Download files directly

@TODO

If you don't want to download, install and run the project locally, you can download directly these versions:

* WCAG2.0 HTML file
* WCAG2.0 ODS file
* WCAG2.0 XLS file

## Building

If you want to create your own tables, you need to install [PHPSpreadsheet](https://phpspreadsheet.readthedocs.io/). According to documentation, this needs:


* PHP version 5.6 or newer
* PHP extension php_zip enabled
* PHP extension php_xml enabled
* PHP extension php_gd2 enabled (if not compiled in)

PHPSpreadsheet is licensed under [GNU LESSER GENERAL PUBLIC LICENSE](vendor/phpoffice/phpspreadsheet/LICENSE).


## Credits

* WCAG JSON taken from Karl Groves's [WCAG as JSON](https://github.com/karlgroves/wcag-as-json)
* Accessibility Responsibility Breakdown taken from the [General Overview](https://www.w3.org/community/wai-engage/wiki/Accessibility_Responsibility_Breakdown#General_Overview)

Then I transformed the table (in sources/overview_table.html) into a JSON and did some PHP.

## LICENCE

MIT license.

This software or document includes material copied from or derived from Web Content Accessibility Guidelines (WCAG) 2.0 https://www.w3.org/TR/WCAG20/. Copyright © 2008 W3C® (MIT, ERCIM, Keio, Beihang).
