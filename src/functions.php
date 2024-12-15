<?php
function getAllHostels() {
    // For now, return a static array or empty array just to test
    return [
        [
            'id' => 1,
            'name' => 'Hostel A',
            'location' => 'Model Town',
            'bedrooms' => 3,
            'bathrooms' => 2,
            'price' => 5000,
            'image_url' => 'assets/images/hostel_a.jpg',
        ],
        // Add more hostels or pull from database
    ];
}
