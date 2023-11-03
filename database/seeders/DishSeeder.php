<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            [
                'name' => 'Spaghetti alla Carbonara',
                'description' => 'Spaghetti con uova, pancetta e formaggio pecorino.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Spaghetti, Uova, Pancetta, Pecorino',
                'price' => 12.99,
            ],
            [
                'name' => 'Filetto di Manzo ai Funghi',
                'description' => 'Filetto di manzo con salsa ai funghi porcini.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Filetto di manzo, Funghi porcini, Burro, Vino rosso',
                'price' => 17.99,
            ],
            [
                'name' => 'Insalata Greca',
                'description' => 'Insalata con pomodori, cetrioli, olive e formaggio feta.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Pomodori, Cetrioli, Olive nere, Formaggio feta',
                'price' => 8.99,
            ],
            [
                'name' => 'Risotto ai Frutti di Mare',
                'description' => 'Risotto con gamberi, cozze e vongole.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Riso Arborio, Gamberi, Cozze, Vongole',
                'price' => 15.99,
            ],
            [
                'name' => 'Tiramisù',
                'description' => 'Dolce italiano al caffè e mascarpone.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Savoiardi, Mascarpone, Caffè, Cacao',
                'price' => 7.99,
            ],
            [
                'name' => 'Pollo alla Cacciatora',
                'description' => 'Pollo cucinato con pomodori, cipolle e vino rosso.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Pollo, Pomodori, Cipolle, Vino rosso',
                'price' => 13.99,
            ],
            [
                'name' => 'Pizza Margherita',
                'description' => 'Pizza classica con pomodoro, mozzarella e basilico.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Pasta per pizza, Salsa di pomodoro, Mozzarella, Basilico',
                'price' => 10.99,
            ],
            [
                'name' => 'Gelato al Cioccolato',
                'description' => 'Gelato al cioccolato artigianale.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Cioccolato fondente, Latte, Zucchero',
                'price' => 5.99,
            ],
            [
                'name' => 'Lasagna al Forno',
                'description' => 'Lasagna con pasta, ragù e besciamella.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Pasta per lasagna, Ragù di carne, Besciamella, Parmigiano',
                'price' => 11.99,
            ],
            [
                'name' => 'Salmone Grigliato',
                'description' => 'Salmone grigliato con limone e erbe aromatiche.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Salmone, Limone, Erbe aromatiche, Olio d\'oliva',
                'price' => 16.99,
            ],
            [
                'name' => 'Carpaccio di Manzo',
                'description' => 'Sottili fette di manzo condite con olio e limone.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Filetto di manzo, Olio d\'oliva, Limone, Parmigiano',
                'price' => 14.99,
            ],
            [
                'name' => 'Zuppa di Pomodoro',
                'description' => 'Zuppa calda di pomodoro con crostini di pane.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Pomodori, Pane, Basilico, Aglio',
                'price' => 9.99,
            ],
            [
                'name' => 'Fettuccine Alfredo',
                'description' => 'Fettuccine con una cremosa salsa al formaggio Parmigiano.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Fettuccine, Panna, Parmigiano, Burro',
                'price' => 12.99,
            ],
            [
                'name' => 'Cotoletta alla Milanese',
                'description' => 'Cotoletta di pollo impanata e fritta.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Cotoletta di pollo, Uova, Pangrattato, Limone',
                'price' => 15.99,
            ],
            [
                'name' => 'Mousse al Cioccolato',
                'description' => 'Dolce mousse al cioccolato con panna montata.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Cioccolato fondente, Panna, Zucchero, Uova',
                'price' => 7.99,
            ],
            [
                'name' => 'Carpaccio di Salmone',
                'description' => 'Salmone affettato sottile con capperi e olio d\'oliva.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Salmone, Capperi, Olio d\'oliva, Limone',
                'price' => 13.99,
            ],
            [
                'name' => 'Risotto ai Funghi',
                'description' => 'Risotto con funghi porcini e parmigiano.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Riso Arborio, Funghi porcini, Parmigiano, Brodo',
                'price' => 16.99,
            ],
            [
                'name' => 'Insalata Caesar',
                'description' => 'Insalata con pollo grigliato, crostini e salsa Caesar.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Pollo, Lattuga, Crostini, Salsa Caesar',
                'price' => 10.99,
            ],
            [
                'name' => 'Panna Cotta',
                'description' => 'Dolce italiano a base di panna con salsa al caramello.',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg',
                'ingredients' => 'Panna, Zucchero, Gelatina, Caramello',
                'price' => 8.99,
            ],
        ];

        foreach ($dishes as $dish) {
            $newDish = new Dish();
            $newDish->restaurant_id = fake()->numberBetween(1,4);
            $newDish->name = $dish['name'];
            $newDish->description = $dish['description'];
            $newDish->ingredients = $dish['ingredients'];
            $newDish->photo = $dish['photo'];
            $newDish->visible = fake()->boolean();
            $newDish->price = $dish['price'];
            $newDish->save();
        }

    }
}
