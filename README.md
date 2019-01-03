# WCAG Process Matrix

This originated in me being frustrated by not seeing the title for success criteria in W3C Wiki's [Accessibility Responsibility Breakdown](https://www.w3.org/community/wai-engage/wiki/Accessibility_Responsibility_Breakdown) and then all hell broke loose because I wanted to be able to tweak things around.

## Aim of this project

1. easy creation of any type of tables
2. copy-pasting should easily make it possible to create sortable/filterable ODS tables.

### The story so far

This project works with WCAG 2.0, based on work by WAI-engage W3C Community Group.

It was evolved to WCAG 2.1 during a workhop that took place during Paris Web 2018. **Please note that all AAA criteria which are new to WCAG 2.1 have only been tagged with “Quality control” as we ran out of time during the workshop.**

## Download files directly

If you don't want to download, install and run the project locally, you can download directly these versions:

* [WCAG2.0 HTML file](https://github.com/notabene/wcag-process-matrix/blob/master/output/process-matrix-wcag20.html)
* [WCAG2.0 ODS file](https://github.com/notabene/wcag-process-matrix/blob/master/output/process-matrix-wcag20.ods)
* [WCAG2.0 XLSX file](https://github.com/notabene/wcag-process-matrix/blob/master/output/process-matrix-wcag20.xlsx)

**Beware** The ODS is less useful than the XLSX. I suspect PHPSpreadsheet does a better job with Excel but this will have to do for now. I still provide the ODS because open source love etc.

## Building

If you want to create your own tables, you need to install [PHPSpreadsheet](https://phpspreadsheet.readthedocs.io/). According to documentation, this needs:


* PHP version 5.6 or newer
* PHP extension php_zip enabled
* PHP extension php_xml enabled
* PHP extension php_gd2 enabled (if not compiled in)

PHPSpreadsheet is licensed under [GNU LESSER GENERAL PUBLIC LICENSE](vendor/phpoffice/phpspreadsheet/LICENSE).

For testing etc., please refer to [README2.md](README2.md).


## Credits

* WCAG 2.0 JSON taken from Karl Groves's [WCAG as JSON](https://github.com/karlgroves/wcag-as-json)
* WCAG 2.1 JSON taken from Eric Eggert's [WCAG Quickref JSON](https://github.com/w3c/wai-wcag-quickref/blob/gh-pages/_data/wcag21.json)
* Accessibility Responsibility Breakdown taken from the [General Overview](https://www.w3.org/community/wai-engage/wiki/Accessibility_Responsibility_Breakdown#General_Overview), then transformed (from sources/overview_table.html) into a JSON.
* WCAG 2.1 responsibilities were created at a workshop during Paris Web 2018, thanks to all participants to the workshop!

## LICENCE

MIT license.

This software or document includes material copied from or derived from Web Content Accessibility Guidelines (WCAG) 2.0 https://www.w3.org/TR/WCAG20/. Copyright © 2008 W3C® (MIT, ERCIM, Keio, Beihang).
