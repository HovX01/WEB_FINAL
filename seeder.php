<?php

use Core\App;
use Core\Database;
echo "Seeding database...\n";
$db = App::resolve(Database::class);

echo "Seeding users...\n";
$admin = 'admin@gmail.com';
$password = '123';
$username = 'admin';

$user = $db->query('SELECT id FROM users WHERE email = :email', ['email' => $admin])->find();
if (!$user) {
    $db->query('INSERT INTO users(email, username, password, role) VALUES(:email, :username, :password, :role)', [
        'email' => $admin,
        'username' => $username,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'role' => 'admin'
    ]);
}

echo "Seeding services...\n";
$services = [
    [
        'title' => 'Pet Boarding',
        'description' => 'Going on a trip or need a safe, loving place for your furry friends? Look no further! Our top-notch pet boarding services ensure your pets enjoy a comfortable, fun, and caring environment while you\'re away. With spacious play areas, cozy sleeping quarters, and lots of love from our experienced staff, your pets will feel right at home.',
        'icon_class' => 'flaticon-house'
    ],
    [
        'title' => 'Pet Grooming',
        'description' => 'Keep your pets healthy and happy with our expert grooming services. From bathing and brushing to nail trimming and teeth cleaning, our professional groomers will take care of all your pets\' needs. With a variety of grooming options and a friendly, knowledgeable staff, you\'ll be able to keep your pets looking and feeling their best.',
        'icon_class' => 'flaticon-grooming'
    ],
    [
        'title' => 'Pet Food',
        'description' => 'Feeding your pets the right food is essential for their overall health and well-being. With our knowledgeable and experienced pet food experts, you can ensure that your pets receive the best nutrition possible. From high-quality dog food to specialized cat food, our team of professionals will provide you with the best options for your pets\' dietary needs.',
        'icon_class' => 'flaticon-food'
    ],
    [
        'title' => 'Pet Training',
        'description' => 'Training your pets is essential for their physical and mental development. With our expert trainers, you can help your pets learn new skills and behaviors, and stay active and healthy. From obedience training to agility and socialization, our team of professionals will provide you with the best options for your pets\' training needs.',
        'icon_class' => 'flaticon-cat'
    ],
    [
        'title' => 'Pet Exercise',
        'description' => 'Keeping your pets active and healthy is essential for their overall well-being. With our expert exercise specialists, you can help your pets stay fit and happy. From daily walks and playtime to group activities and sports, our team of professionals will provide you with the best options for your pets\' exercise needs.',
        'icon_class' => 'flaticon-dog'
    ],
    [
        'title' => 'Pet Treatment',
        'description' => 'Taking care of your pets is essential for their overall health and well-being. With our expert veterinarians, you can help your pets stay healthy and happy. From routine check-ups and vaccinations to specialized medical care and wellness plans, our team of professionals will provide you with the best options for your pets\' treatment needs.',
        'icon_class' => 'flaticon-vaccine'
    ]
];
$db->query('TRUNCATE TABLE services');
foreach ($services as $service) {
    $db->query('INSERT INTO services(title, description, icon_class) VALUES(:title, :description, :icon_class)', [
        'title' => $service['title'],
        'description' => $service['description'],
        'icon_class' => $service['icon_class']
    ]);
}

echo "Seeding pets...\n";

$pets = [
    [
        'name' => 'Cat',
        'image' => 'img/Cat1.png',
        'price' => 300
    ],
    [
        'name' => 'Dog',
        'image' => 'img/dog.png',
        'price' => 450
    ],
    [
        'name' => 'Rabbit',
        'image' => 'img/Rabbit.png',
        'price' => 200
    ],
    [
        'name' => 'Parrot',
        'image' => 'img/Parrot.png',
        'price' => 150
    ],
    [
        'name' => 'goldfish',
        'image' => 'img/Fish.png',
        'price' => 69
    ],
    [
        'name' => 'Hamster',
        'image' => 'img/Hamster.png',
        'price' => 65
    ]
];
$db->query('TRUNCATE TABLE pets');
foreach ($pets as $pet) {
    $db->query('INSERT INTO pets(name, image, price) VALUES(:name, :image, :price)', [
        'name' => $pet['name'],
        'image' => $pet['image'],
        'price' => $pet['price']
    ]);
}

echo "Seeding foods...\n";

$foods = [
    [
        'name' => 'Bird Foods',
        'image' => 'img/product-1.png',
        'price' => 50
    ],
    [
        'name' => 'Cat feeds',
        'image' => 'img/product-2.png',
        'price' => 50
    ],
    [
        'name' => 'Dog feeds',
        'image' => 'img/product-3.png',
        'price' => 60
    ],
    [
        'name' => 'Rabbit feeds',
        'image' => 'img/product-4.png',
        'price' => 49
    ],
    [
        'name' => 'Fish Food',
        'image' => 'img/Fish Food.png',
        'price' => 39
    ],
    [
        'name' => 'Chicken Food',
        'image' => 'img/Chicken Food.png',
        'price' => 39
    ]
];
$db->query('TRUNCATE TABLE foods');
foreach ($foods as $food) {
    $db->query('INSERT INTO foods(name, image, price) VALUES(:name, :image, :price)', [
        'name' => $food['name'],
        'image' => $food['image'],
        'price' => $food['price']
    ]);
}

echo "Finished seeding database.\n";