```php
function processData(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            $result[] = processData($item);
        } elseif (is_string($item) && strlen($item) > 0) {
            $result[] = strtoupper($item);
        } else {
            // Handle unexpected data types gracefully
            error_log("Unexpected data type encountered: " . gettype($item));
            // Or, add a default value:
            //$result[] = 'UNKNOWN';
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