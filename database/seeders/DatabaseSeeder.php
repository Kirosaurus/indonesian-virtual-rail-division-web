<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categories;
use App\Models\Tags;
use App\Models\Products;
use App\Models\Images;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // 1. Seed Users
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        // 2. Seed Categories TERLEBIH DAHULU
        $categories = [
            ['id' => 1, 'name' => 'Objek'],
            ['id' => 2, 'name' => 'Rute'],
            ['id' => 3, 'name' => 'Enginesound'],
        ];
        foreach ($categories as $cat) {
            Categories::create($cat);
        }

        // 3. Seed Tags TERLEBIH DAHULU
        $tags = [
            ['id' => 1, 'name' => 'All Support'],
            ['id' => 2, 'name' => 'Android  Version'],
            ['id' => 3, 'name' => 'Android Version'],
            ['id' => 4, 'name' => 'Trainz New Era (TANE)'],
            ['id' => 5, 'name' => 'Trainz Simulator 2019 (TRS19)'],
            ['id' => 6, 'name' => 'Trainz Simulator 2022 (TRS22)'],
            ['id' => 7, 'name' => 'Trainz Sim 2012'],
        ];
        foreach ($tags as $tag) {
            Tags::create($tag);
        }

        // 4. Seed Products (sekarang categories sudah ada)
        $products = [
            [
                'id' => 2,
                'name' => 'Stasiun Garum',
                'type' => 'freeware',
                'description' => 'Stasiun Garum adalah sebuah stasiun kereta api yang terletak di Kecamatan Garum, Kabupaten Blitar, Jawa Timur. Stasiun ini berada di bawah pengelolaan PT Kereta Api Indonesia (KAI) dan termasuk dalam wilayah operasional Daerah Operasi VII Madiun. Stasiun Garum melayani perjalanan kereta api penumpang di lintas selatan Jawa, yang menghubungkan berbagai kota penting seperti Blitar, Malang, dan Surabaya. Meskipun tidak sebesar stasiun utama di sekitarnya, Stasiun Garum memiliki peran penting sebagai titik naik-turun penumpang bagi masyarakat lokal, terutama warga sekitar Kecamatan Garum dan wilayah Blitar bagian timur. \r\nnote: Non PBR',
                'price' => null,
                'category_id' => 1,
                'active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Daerah Operasi 6-4-7-8 (YK-SLO-SMC-MN-SGU) - Android',
                'type' => 'payware',
                'description' => 'Rute Daerah Operasi 6–4–7–8 (YK–SLO–SMC–MN–SGU) menghadirkan pengalaman dinasan yang kaya variasi...',
                'price' => 150000.00,
                'category_id' => 2,
                'active' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Daerah Operasi 8-7 (Lawang-Malang-Blitar)',
                'type' => 'payware',
                'description' => 'Rute Daerah Operasi 8–7 (Lawang–Malang–Blitar) memiliki skala jarak antar stasiun 1:1...',
                'price' => 40000.00,
                'category_id' => 2,
                'active' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Daerah Operasi 6-4-7-8 (YK-SLO-SMC-MN-SGU) - Tane Up',
                'type' => 'payware',
                'description' => 'Rute Daerah Operasi 6–4–7–8 (YK–SLO–SMC–MN–SGU) menghadirkan pengalaman dinasan yang kaya variasi...',
                'price' => 170000.00,
                'category_id' => 2,
                'active' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Daerah Operasi 6-4-7-8 (YK-SLO-SMC-MN-SGU) - TS12',
                'type' => 'payware',
                'description' => 'Rute Daerah Operasi 6–4–7–8 (YK–SLO–SMC–MN–SGU) menghadirkan pengalaman dinasan yang kaya variasi...',
                'price' => 160000.00,
                'category_id' => 2,
                'active' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Daerah Operasi 2-5 (Indihiang-Banjar-Sidareja)',
                'type' => 'payware',
                'description' => 'Daop 5–Daop 2 (Sidareja–Banjar–Indihiang) menghadirkan pengalaman dinasan yang khas...',
                'price' => 35000.00,
                'category_id' => 2,
                'active' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Daerah Operasi 7-8 (Kertosono-Mojokerto-Sidotopo)',
                'type' => 'payware',
                'description' => 'Daop 7–8 (Kertosono–Mojokerto–Sidotopo) menghadirkan pengalaman dinasan yang khas...',
                'price' => 40000.00,
                'category_id' => 2,
                'active' => 1,
            ],
            [
                'id' => 9,
                'name' => 'NEW ENGINESOUND 2025 HD Pack',
                'type' => 'payware',
                'description' => '**NEW ENGINESOUND 2025 HD Pack** adalah paket sound untuk simulator kereta...',
                'price' => 50000.00,
                'category_id' => 3,
                'active' => 1,
            ],
            [
                'id' => 10,
                'name' => '2026 New Enginesound Pack Api api🔥🔥',
                'type' => 'payware',
                'description' => '**2026 New Enginesound Pack Api Api 🔥🔥** adalah paket sound simulator kereta...',
                'price' => 30000.00,
                'category_id' => 3,
                'active' => 1,
            ],
        ];
        foreach ($products as $product) {
            Products::create($product);
        }

        // 5. Seed Products Images (sekarang products sudah ada)
        $images = [
            ['product_id' => 2, 'path' => 'image-products/hoPtbKmTTsMWXwNSzS1ArLa7pIjrbnoeEhuId8AI.png', 'is_primary' => 0],
            ['product_id' => 4, 'path' => 'image-products/82Zy0hG7DrrtfzNIShie3uMvh2I7P8hc5kACdszD.png', 'is_primary' => 0],
            ['product_id' => 4, 'path' => 'image-products/XB6ZK2xZYuOXYrVOP2l2zoUJ9SIfwVmK26DjPQwj.png', 'is_primary' => 0],
            ['product_id' => 4, 'path' => 'image-products/uyIhKxe8PJ2OUtLNlbr4HEhGg9ScY8X4wZgcGPpy.png', 'is_primary' => 0],
            ['product_id' => 5, 'path' => 'image-products/FTYkNF6OHSSYII3u9yOqknAN1LRvpAR831agrxAg.jpg', 'is_primary' => 0],
            ['product_id' => 5, 'path' => 'image-products/ohOb3ZMWaGLIPQ6HatrEDhB9XhgWe9lvdp2wURIY.jpg', 'is_primary' => 0],
            ['product_id' => 5, 'path' => 'image-products/fI4vNJgI1iTdbJlHYaNjs5BpMHZ9IcXvgPLRUicG.jpg', 'is_primary' => 0],
            ['product_id' => 6, 'path' => 'image-products/O2YDz7q7pgG97siBpcU5fSiL6Jhof95KnhBcXdKF.png', 'is_primary' => 0],
            ['product_id' => 6, 'path' => 'image-products/0imDAlEoVLiEGsfiVJb40I9A6ekDvGW8CWyW4bZn.png', 'is_primary' => 0],
            ['product_id' => 6, 'path' => 'image-products/doQSjouOjX6dPWMfBlRCLXAuO6Yt43TjZ66t50Bm.png', 'is_primary' => 0],
            ['product_id' => 6, 'path' => 'image-products/sgjz5WhAPVHqMFTuD1Z4LskFFTG31Wws2qTP72QG.png', 'is_primary' => 0],
            ['product_id' => 6, 'path' => 'image-products/GmcZwFGuthMGhlEkhZfqjWTMexb3GMMNVuBbXGVz.png', 'is_primary' => 0],
            ['product_id' => 6, 'path' => 'image-products/PcvgSOYpbY8vZT7au5CYSTS4QMPBOdFkke8ocSvz.png', 'is_primary' => 0],
            ['product_id' => 6, 'path' => 'image-products/6Y7H45yD54pGbvy2bOOxgb29LGh6HoVbR3aSwZbS.png', 'is_primary' => 0],
            ['product_id' => 6, 'path' => 'image-products/ilVe3dteCnwq6KkhEiZt8a44w9oLC67HuVQCgIXt.png', 'is_primary' => 0],
            ['product_id' => 3, 'path' => 'image-products/9RZFBLChhYOj2kdPNGmhkGXCOft9oki9tmengkXn.jpg', 'is_primary' => 0],
            ['product_id' => 3, 'path' => 'image-products/jLfDGm8QMPUeHz2HGyhiFZ05JlvBZbHQKcLSN3vg.jpg', 'is_primary' => 0],
            ['product_id' => 3, 'path' => 'image-products/K7fkTQlEyPY0BbBJFCjI5uF4lAP1hC6VzF22Z1aA.jpg', 'is_primary' => 0],
            ['product_id' => 3, 'path' => 'image-products/qZKx2kARbkc0miguAYhlyFuFiiVvY7jMQSH9eAKz.jpg', 'is_primary' => 0],
            ['product_id' => 7, 'path' => 'image-products/X7Rt87oIxarXUnjSueWtkm2Vw9npxBd1gPEMIfHW.jpg', 'is_primary' => 0],
            ['product_id' => 7, 'path' => 'image-products/Pfdu2azdQA0g7rxoTCCBofdsyu9OJoXkHIcFeZxg.jpg', 'is_primary' => 0],
            ['product_id' => 7, 'path' => 'image-products/bwYnO3DsRCZkhKnYqFtTURm4bdrPNfxJtLj97lFv.jpg', 'is_primary' => 0],
            ['product_id' => 8, 'path' => 'image-products/ZhiwCmOBukkSWVmQdjY0rrEPbsdhtLEYvEUBnFVh.png', 'is_primary' => 0],
            ['product_id' => 8, 'path' => 'image-products/ui1UPGgKcC0gUg9fNbjPgKkw2QShYXYkdXsfqVa1.png', 'is_primary' => 0],
            ['product_id' => 8, 'path' => 'image-products/S7KfEs37QmkKljkqxp8C298hqujsBp68vgpGiWEe.png', 'is_primary' => 0],
            ['product_id' => 8, 'path' => 'image-products/VxKY4uTpeu6MhIuR2YHDFF3weEaTOqBuulyYe1PQ.png', 'is_primary' => 0],
            ['product_id' => 8, 'path' => 'image-products/J6z5mswivHnhXLgYGaoZAY84DYcXf6aUVHoCtObs.png', 'is_primary' => 0],
            ['product_id' => 9, 'path' => 'image-products/J9WV4WoKzGwHZxy7pPryOA3YTW1fU8HRZbFkD7nx.png', 'is_primary' => 0],
            ['product_id' => 10, 'path' => 'image-products/syTVYXJB8GK0Y03v1oQ2LKVJ7AYf0rK4xunmv0dj.png', 'is_primary' => 0],
        ];
        foreach ($images as $image) {
            Images::create($image);
        }

        // 6. Seed Product Tags (sekarang products & tags sudah ada)
        $productTags = [
            [2, 1],  // Stasiun Garum -> All Support
            [3, 2],  // Daop 6-4-7-8 Android -> Android Version
            [4, 3],  // Daop 8-7 -> Android Version
            [5, 4],  // Daop 6-4-7-8 Tane -> TANE
            [5, 5],  // Daop 6-4-7-8 Tane -> TRS19
            [5, 6],  // Daop 6-4-7-8 Tane -> TRS22
            [6, 7],  // Daop 6-4-7-8 TS12 -> TS12
            [7, 3],  // Daop 2-5 -> Android Version
            [8, 3],  // Daop 7-8 -> Android Version
            [9, 1],  // Enginesound 2025 -> All Support
            [10, 1], // Enginesound Api -> All Support
        ];
        
        foreach ($productTags as [$productId, $tagId]) {
            // Attach tag ke product menggunakan pivot table
            Products::find($productId)->tags()->attach($tagId);
        }
    }
}