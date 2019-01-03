# Documentation

## TESTING THE JSON

The method is very progressive and aims at being solid and thorough.

1. `tests/validatejson.php` we test if the JSON is well-formed by a simple `json_decode()`.
2. `tests/wcagjson2phparray.php` we test that the JSON can be correctly converted to a PHP Array.
3. `tests/complete_table.php` generates a complete HTML table with all the data pulled from the 3 JSONs:
 3.1. WCAG JSON (i.e. in 2.1 it's `data/wcag2.1/wcag21.json`)
 3.2. Responsiblity labels (i.e. `data/responsibility_labels.json`)
 3.3. Responsibility matrix (i.e. in 2.1 it's `data/wcag2.1/responsibility_matrix.json`)