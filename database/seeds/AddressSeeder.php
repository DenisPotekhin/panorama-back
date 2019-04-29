<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'index' => 414000,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Ленина',
                'build' => '1',
            ],
            [
                'id' => 2,
                'index' => 414021,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Боевая',
                'build' => '124',
            ],
            [
                'id' => 3,
                'index' => 414024,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Богдана Хмельницкого',
                'build' => '13к2',
            ],
            [
                'id' => 4,
                'index' => 414006,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Черниковская',
                'build' => '11',
            ],
            [
                'id' => 5,
                'index' => 414057,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Михаила Луконина',
                'build' => '5',
            ],
            [
                'id' => 6,
                'index' => 414041,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Сун Ят-Сена',
                'build' => '61',
            ],
            [
                'id' => 7,
                'index' => 414042,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Коновалова',
                'build' => '14а',
            ],
            [
                'id' => 8,
                'index' => 414032,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Краматорская',
                'build' => '4',
            ],
            [
                'id' => 9,
                'index' => 414028,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Степная 2-я',
                'build' => '5',
            ],
            [
                'id' => 10,
                'index' => 416370,
                'region' => '30',
                'city' => 'с. Икряное',
                'street' => 'Мира',
                'build' => '36',
            ],
            [
                'id' => 11,
                'index' => 414040,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Чехова',
                'build' => '10',
            ],
            [
                'id' => 12,
                'index' => 414006,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Льва Толстого',
                'build' => '30',
            ],
            [
                'id' => 13,
                'index' => 414024,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Жана Жореса',
                'build' => '16',
            ],
            [
                'id' => 14,
                'index' => 416340,
                'region' => '30',
                'city' => 'г. Камызяк',
                'street' => 'Пушкина',
                'build' => '1',
            ],
            [
                'id' => 15,
                'index' => 414024,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Ширяева',
                'build' => '14',
            ],
            [
                'id' => 16,
                'index' => 414041,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Бориса Алексеева',
                'build' => '41',
            ],
            [
                'id' => 17,
                'index' => 414006,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Матюшенко',
                'build' => '9',
            ],
            [
                'id' => 18,
                'index' => 414024,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Дубровинского',
                'build' => '52к1',
            ],
            [
                'id' => 19,
                'index' => 414057,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Фунтовское шоссе',
                'build' => '9',
            ],
            [
                'id' => 20,
                'index' => 414018,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Аэропортовский проезд',
                'build' => '1ст1',
            ],
            [
                'id' => 21,
                'index' => 414050,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Гагарина',
                'build' => '28',
            ],
            [
                'id' => 22,
                'index' => 414000,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Володарского',
                'build' => '4',
            ],
            [
                'id' => 23,
                'index' => 414024,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Боевая',
                'build' => '71',
            ],
            [
                'id' => 24,
                'index' => 416450,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Ленина',
                'build' => '46',
            ],
            [
                'id' => 25,
                'index' => 416340,
                'region' => '30',
                'city' => 'г. Камызяк',
                'street' => 'Ленина',
                'build' => '17/1',
            ],
            [
                'id' => 26,
                'index' => 414040,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Коммунистическая',
                'build' => '56',
            ],
            [
                'id' => 27,
                'index' => 414056,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Бертюльская',
                'build' => '4',
            ],
            [
                'id' => 28,
                'index' => 414056,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Татищева',
                'build' => '16г',
            ],
            [
                'id' => 29,
                'index' => 414056,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Татищева',
                'build' => 'к29',
            ],
            [
                'id' => 30,
                'index' => 414052,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Ботвина',
                'build' => '14',
            ],
            [
                'id' => 31,
                'index' => 414041,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Нариманова',
                'build' => '2Б',
            ],
            [
                'id' => 32,
                'index' => 414011,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Украинская',
                'build' => '3',
            ],
            [
                'id' => 33,
                'index' => 414009,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Атарбекова',
                'build' => '37',
            ],
            [
                'id' => 34,
                'index' => 414032,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Бульварная',
                'build' => '2',
            ],
            [
                'id' => 35,
                'index' => 414032,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Жилая',
                'build' => '9к5',
            ],
            [
                'id' => 36,
                'index' => 414000,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Эспланадная',
                'build' => '36',
            ],
            [
                'id' => 37,
                'index' => 414000,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Максима Горького',
                'build' => '33',
            ],
            [
                'id' => 38,
                'index' => 414024,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Набережная Приволжского Затона',
                'build' => '11',
            ],
            [
                'id' => 39,
                'index' => 414040,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Чугунова',
                'build' => '23',
            ],
            [
                'id' => 40,
                'index' => 414004,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Рылеева',
                'build' => '36а',
            ],
            [
                'id' => 41,
                'index' => 414004,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Софьи Перовской',
                'build' => '101к7',
            ],
            [
                'id' => 42,
                'index' => 414041,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Куликова',
                'build' => '13к1',
            ],
            [
                'id' => 43,
                'index' => 414041,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'Сун Ят-Сена',
                'build' => '64Б',
            ],
            [
                'id' => 44,
                'index' => 414056,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Холодильники рыбокомбината',
                'build' => '',
            ],
            [
                'id' => 45,
                'index' => 414056,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Станкостроительный завод',
                'build' => '',
            ],
            [
                'id' => 46,
                'index' => 414056,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Главное бюро медико-социальной экспертизы по Астраханской области',
                'build' => '',
            ],
            [
                'id' => 47,
                'index' => 414056,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Центральный стадион',
                'build' => '',
            ],
            [
                'id' => 48,
                'index' => 414056,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. АГТУ (ул. Савушкина)',
                'build' => '',
            ],
            [
                'id' => 49,
                'index' => 414056,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Школа им. Пушкина (ул. Савушкина)',
                'build' => '',
            ],
            [
                'id' => 50,
                'index' => 414056,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Кинотеатр Призыв (ул. Савушкина)',
                'build' => '',
            ],
            [
                'id' => 51,
                'index' => 414056,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Селенские Исады',
                'build' => '',
            ],
            [
                'id' => 52,
                'index' => 414040,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Детский Мир',
                'build' => '',
            ],
            [
                'id' => 53,
                'index' => 414040,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Ж/д вокзал (ул. Анри Барбюса)',
                'build' => '',
            ],
            [
                'id' => 54,
                'index' => 414040,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Ж/д вокзал (ул. Анри Барбюса)',
                'build' => '',
            ],
            [
                'id' => 55,
                'index' => 414040,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Ж/д вокзал',
                'build' => '',
            ],
            [
                'id' => 56,
                'index' => 414041,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Политехнический колледж',
                'build' => '',
            ],
            [
                'id' => 57,
                'index' => 414041,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Школа №4',
                'build' => '',
            ],
            [
                'id' => 58,
                'index' => 414041,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. ЦДО №2',
                'build' => '',
            ],
            [
                'id' => 59,
                'index' => 414052,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Маркина',
                'build' => '',
            ],
            [
                'id' => 60,
                'index' => 414052,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Мясокомбинат',
                'build' => '',
            ],
            [
                'id' => 61,
                'index' => 414041,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Астраханский питомник',
                'build' => '',
            ],
            [
                'id' => 62,
                'index' => 414041,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Завод КПД (Ленинский)',
                'build' => '',
            ],
            [
                'id' => 63,
                'index' => 414041,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Консервный завод',
                'build' => '',
            ],
            [
                'id' => 64,
                'index' => 414011,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Алуштинский пер.',
                'build' => '',
            ],
            [
                'id' => 65,
                'index' => 414011,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Техучилище №6',
                'build' => '',
            ],
            [
                'id' => 66,
                'index' => 414011,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Судоверфь им. Кирова',
                'build' => '',
            ],
            [
                'id' => 67,
                'index' => 414011,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Каспийгазавтосервис',
                'build' => '',
            ],
            [
                'id' => 68,
                'index' => 414011,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Космическая',
                'build' => '',
            ],
            [
                'id' => 69,
                'index' => 414011,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Мошаик',
                'build' => '',
            ],
            [
                'id' => 70,
                'index' => 414011,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Приклубная',
                'build' => '',
            ],
            [
                'id' => 71,
                'index' => 414011,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ост. Садовских',
                'build' => '',
            ],
            [
                'id' => 72,
                'index' => 414000,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ул. Водопроводная',
                'build' => '9Б',
            ],
            [
                'id' => 73,
                'index' => 414000,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ул. Кирова',
                'build' => '47',
            ],
            [
                'id' => 74,
                'index' => 414004,
                'region' => '30',
                'city' => 'г. Астрахань',
                'street' => 'ул. Кр. Набережная',
                'build' => '231к2',
            ],
        ];

        foreach ($data as $value) {
            DB::table('address')->insert($value);
        }
    }
}
