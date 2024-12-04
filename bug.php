```php
function processData(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            $result[] = processData($item); // Recursive call for nested arrays
        } elseif (is_string($item) && strlen($item) > 0) {
            $result[] = strtoupper($item); // Process strings
        }
    }
    return $result;
}

$data = [
    "apple",
    ["banana", "cherry"],
    123, // Unexpected data type
    "date"
];

$processedData = processData($data);
print_r($processedData); 
```