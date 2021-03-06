<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElementsSeeder extends Seeder
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
                'title' => 'ТОС МУК',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 2,
                'title' => 'ТОС УК "КонсалтингПроф"',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 3,
                'title' => 'ТОС "Бабаевского"',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 4,
                'title' => 'ТОС Альянс',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 5,
                'title' => 'ТОС Эллинг',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 6,
                'title' => 'ТОС Комсомольская набережная',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 7,
                'title' => 'ТОС Союз',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 8,
                'title' => 'ТОС Благополучие',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 9,
                'title' => 'ТОС Спутник',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 10,
                'title' => 'ТОС Любимый город',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 11,
                'title' => 'ТОС Тютчева',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 12,
                'title' => 'ТОС КАМА',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 13,
                'title' => 'ТОС "Сун-Ят-Сена"',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 14,
                'title' => 'ТОС "Микрорайон"',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 15,
                'title' => 'ТОС "Бумажник-1"',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 16,
                'title' => 'ТОС "Жилгородок"',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 17,
                'title' => 'ТОС "Форпост"',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 18,
                'title' => 'ТОС "Вороний бугор"',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 19,
                'title' => 'ТОС "Юго-Восточный"',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 20,
                'title' => 'ТОС "Добрых дел"',
                'description' => '',
                'layer_id' => 12,
            ],
            [
                'id' => 21,
                'title' => 'Аварийная газовая служба',
                'description' => '<p>Работает: круглосуточно</p><p>+7 (8512) 30–17–40</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 22,
                'title' => 'Волгоспас',
                'description' => '<p>Областная спасательно-пожарная служба</p><p>+7 (8512) 26–68–30</p><p>volgospas.ru</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 23,
                'title' => 'Скорая медицинская помощь',
                'description' => '<p>Подстанция Трусовского района</p><p>Круглосуточная единая справочная: 103</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 24,
                'title' => 'Скорая медицинская помощь',
                'description' => '<p>Центральная подстанция</p><p>Круглосуточная единая справочная: 103</p><p>Приёмная: +7 (8512) 33–24–27</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 25,
                'title' => 'Скорая медицинская помощь',
                'description' => '<p>Подстанция Ленинского района</p><p>Круглосуточная единая справочная: 103</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 26,
                'title' => 'Скорая медицинская помощь',
                'description' => '<p>Подстанция АЦКК</p><p>Круглосуточная единая справочная: 103</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 27,
                'title' => 'Скорая медицинская помощь',
                'description' => '<p>Подстанция Комсомольская</p><p>Круглосуточная единая справочная: 103</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 28,
                'title' => 'Скорая медицинская помощь',
                'description' => '<p>Подстанция Советская</p><p>Круглосуточная единая справочная: 103</p><p>Приёмная: +7 (8512) 30–59–45</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 29,
                'title' => 'Скорая медицинская помощь',
                'description' => '<p>Подстанция икрянинского района</p><p>Круглосуточная единая справочная: 103</p><p>Приёмная: +7 (85144) 2–01–72</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 30,
                'title' => 'Аварийно-спасательный центр',
                'description' => '<p>Работает: круглосуточно</p><p>Круглосуточная единая справочная: 005</p><p>+7 (8512) 51–05–46</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 31,
                'title' => 'Волгоспас',
                'description' => '<p>Служба спасения на водах</p><p>+7 (8512) 26–68–51</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 32,
                'title' => 'Дельта - Газоспасательная служба',
                'description' => '<p>ООО Партнер-Плюс</p><p>+7 (8512) 49–27–60</p><p>+7 (8512) 996–112</p><p>+7 (8512) 49–26–62</p><p>partnerplus30.ru</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 33,
                'title' => 'Пожарно-спастельная часть №40',
                'description' => '<p>Работает: круглосуточно</p><p>Круглосуточная единая справочная: 112</p><p>+7 (85145) 9–18–90</p>',
                'layer_id' => 1,
            ],
            [
                'id' => 34,
                'title' => 'Отдел полиции №1',
                'description' => '<p>Управление МВД России по г. Астрахани</p><p>Работает: круглосуточно</p><p>Дежурная часть: +7 (8512) 40–47–00</p>',
                'layer_id' => 2,
            ],
            [
                'id' => 35,
                'title' => 'Отдел полиции №2',
                'description' => '<p>Управление МВД России по г. Астрахани</p><p>Дежурная часть: +7 (8512) 40–46–78</p><p>+7 (8512) 40–46–00</p>',
                'layer_id' => 2,
            ],
            [
                'id' => 36,
                'title' => 'Отдел полиции №3',
                'description' => '<p>Управление МВД России по г. Астрахани</p><p>Работает: круглосуточно</p><p>+7 (8512) 40–45–00</p>>',
                'layer_id' => 2,
            ],
            [
                'id' => 37,
                'title' => 'Отдел ГИБДД',
                'description' => '<p>Управление МВД России по г. Астрахани</p><p>+7 (8512) 44–82–35</p><p>+7 (8512) 44–82–30</p><p>+7 (8512) 44–82–38</p>',
                'layer_id' => 2,
            ],
            [
                'id' => 38,
                'title' => 'Полк ППС полиции',
                'description' => '<p>Управление МВД России по г. Астрахани</p><p>Дежурная служба: +7 (8512) 34–00–06</p>',
                'layer_id' => 2,
            ],
            [
                'id' => 39,
                'title' => 'Астраханский линейный отдел МВД России на транспорте',
                'description' => '<p>+7 (8512) 39–33–02</p>',
                'layer_id' => 2,
            ],
            [
                'id' => 40,
                'title' => 'Линейное отделение полиции в портах г. Астрахани',
                'description' => '<p>+7 (8512) 49–90–75</p>',
                'layer_id' => 2,
            ],
            [
                'id' => 41,
                'title' => 'Отделение по делам несовершеннолетних',
                'description' => '<p>Отдел полиции №4, Управление МВД России по г. Астрахани</p><p>+7 (8512) 51–84–08</p>',
                'layer_id' => 2,
            ],
            [
                'id' => 42,
                'title' => 'Отдел полиции №1 по делам несовершеннолетних',
                'description' => '<p>Подразделение по делам несовершеннолетних, Управление МВД России по г. Астрахани</p><p>+7 (8512) 40–47–66</p>',
                'layer_id' => 2,
            ],
            [
                'id' => 43,
                'title' => 'Отделение по делам несовершеннолетних ОМВД России по Астраханской области',
                'description' => '<p>Дежурная часть: +7 (8512) 49–57–23</p><p>+7 (8512) 40–69–30</p>',
                'layer_id' => 2,
            ],
            [
                'id' => 44,
                'title' => 'Подразделение по делам несовершеннолетних',
                'description' => '<p>Отдел МВД России по Камызякскому району</p><p>+7 (85145) 9–15–12</p>',
                'layer_id' => 2,
            ],
            [
                'id' => 45,
                'title' => 'Участковый пункт полиции №1',
                'description' => '<p>Отдел полиции №2, Управление МВД России по г. Астрахани, Ленинский район</p><p>+7 (8512) 25–64–56</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 46,
                'title' => 'Участковый пункт полиции №2',
                'description' => '<p>Отдел полиции №2, Управление МВД России по г. Астрахани, Ленинский район</p><p>+7 (8512) 25–12–92</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 47,
                'title' => 'Участковый пункт полиции №3',
                'description' => '<p>Отдел полиции №2, Управление МВД России по г. Астрахани, Ленинский район</p><p>+7 (8512) 61–44–13</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 48,
                'title' => 'Участковый пункт полиции №4',
                'description' => '<p>Отдел полиции №2, Управление МВД России по г. Астрахани, Ленинский район</p><p>+7 (8512) 54–90–55</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 49,
                'title' => 'Участковый пункт полиции №5, №6',
                'description' => '<p>Отдел полиции №2, Управление МВД России по г. Астрахани, Ленинский район</p><p>+7 (8512) 36–38–00</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 50,
                'title' => 'Участковый пункт полиции №7',
                'description' => '<p>Отдел полиции №2, Управление МВД России по г. Астрахани, Ленинский район</p><p>+7 (8512) 36–29–21</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 51,
                'title' => 'Участковый пункт полиции №8',
                'description' => '<p>Отдел полиции №2, Управление МВД России по г. Астрахани, Ленинский район</p><p>+7 (8512) 49–17–30</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 52,
                'title' => 'Участковый пункт полиции №9, №10',
                'description' => '<p>Отдел полиции №2, Управление МВД России по г. Астрахани, Ленинский район</p><p>+7 (8512) 25–64–56</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 53,
                'title' => 'Участковый пункт полиции №11',
                'description' => '<p>Отдел полиции №2, Управление МВД России по г. Астрахани, Ленинский район</p><p>+7 (8512) 55–20–43</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 54,
                'title' => 'Участковый пункт полиции №12',
                'description' => '<p>Отдел полиции №2, Управление МВД России по г. Астрахани, Ленинский район</p><p>+7 (8512) 55–42–35</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 55,
                'title' => 'Участковый пункт полиции №1',
                'description' => '<p>Отдел полиции №4, Управление МВД России по г. Астрахани, Кировский район</p><p>+7 (8512) 51–45–00</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 56,
                'title' => 'Участковый пункт полиции №2',
                'description' => '<p>Отдел полиции №4, Управление МВД России по г. Астрахани, Кировский район</p><p>+7 (8512) 52–37–58</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 57,
                'title' => 'Участковый пункт полиции №3',
                'description' => '<p>Отдел полиции №4, Управление МВД России по г. Астрахани, Кировский район</p><p>+7 (8512) 51–50–04</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 58,
                'title' => 'Участковый пункт полиции №5',
                'description' => '<p>Отдел полиции №4, Управление МВД России по г. Астрахани, Кировский район</p><p>+7 (8512) 51–31–71</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 59,
                'title' => 'Участковый пункт полиции №6',
                'description' => '<p>Отдел полиции №4, Управление МВД России по г. Астрахани, Кировский район</p><p>+7 (8512) 51–45–01</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 60,
                'title' => 'Участковый пункт полиции №8',
                'description' => '<p>Отдел полиции №4, Управление МВД России по г. Астрахани, Кировский район</p><p>+7 (8512) 49–62–09</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 61,
                'title' => 'Участковый пункт полиции №9',
                'description' => '<p>Отдел полиции №4, Управление МВД России по г. Астрахани, Кировский район</p><p>+7 (8512) 40–17–45</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 62,
                'title' => 'Участковый пункт полиции №10',
                'description' => '<p>Отдел полиции №4, Управление МВД России по г. Астрахани, Кировский район</p><p>+7 (8512) 36–88–89</p>',
                'layer_id' => 3,
            ],
            [
                'id' => 63,
                'title' => 'Маршрутка 90c',
                'description' => '<p>Стоимость проезда: 20руб.</p><p>График: ежедневно с 06:30 до 21:30</p><p>Расписание или интервал движения: 6 - 14 минут</p><p>Компания-перевозчик: ИП Куксин Д.И.</p><p>Маршрут следования: улица Садовских - улица Патона - улица Соколова - улица Космонавта Комарова - Краснопитерская улица - набережная Казачьего Ерика - Латвийская улица - Славянская улица - Рыбинская улица - Ереванская улица - улица Яблочкова - улица Анри Барбюса - улица Савушкина - улица Латышева</p>',
                'layer_id' => 4,
            ],
            [
                'id' => 64,
                'title' => 'И.П. МОТИНОВА С.А.',
                'description' => '<p>Руководитель: Мотинова Светлана Анатольевна</p><p>Фактический адрес: обл. Астраханская, г. Астрахань, ул. Н.Островского, д. 144</p><p>Телефон и e-mail: +79093737360, motinova1968@mai.ru</p>',
                'layer_id' => 7,
            ],
            [
                'id' => 65,
                'title' => 'МАСТЕРКОМ',
                'description' => '<p>Руководитель: Тихонов Юрий Александрович</p><p>Фактический адрес: обл. Астраханская, р-н. Наримановский, г. Нариманов, ул. Школьная, д. 2</p><p>Телефон и e-mail: 88517162631, masterkom_mk@mail.ru</p>',
                'layer_id' => 7,
            ],
            [
                'id' => 66,
                'title' => 'МУП Г. АСТРАХАНИ УК "ЛОТОС"',
                'description' => '<p>Руководитель: Зуев Сергей Николаевич</p><p>Фактический адрес: обл. Астраханская, г. Астрахань, ул. Степана Здоровцева, д. 3</p><p>Телефон и e-mail: (8512) 25-05-63, uk-lotos@yandex.ru</p>',
                'layer_id' => 7,
            ],
//            [
//                'id' => 67,
//                'title' => 'ООО "ДОВЕРИЕ"',
//                'description' => '<p>Руководитель: Ереметова Татьяна Алексеевна</p><p>Фактический адрес: обл. Астраханская, г. Астрахань, ул. 11 Красной Армии, д. 6, к. б</p><p>Телефон и e-mail: 8512 61 99 06, doverie30@mail.ru</p><p>Ответственный за заполнение: ООО ДОВЕРИЕ</p><p>Официальный сайт в сети Интернет: доверие30.рф</p>',
//                'layer_id' => 7,
//            ],
//            [
//                'id' => 68,
//                'title' => 'ООО УК "ЖИЛКОМПЛЕКС"',
//                'description' => '<p>Руководитель: Кашина Елена Ильдаровна</p><p>Фактический адрес: обл. Астраханская, г. Астрахань, ул. Татищева, д. 4, к. Б, п. 3</p><p>Телефон и e-mail: 8(8512)24-18-18, zkompleks@list.ru</p>',
//                'layer_id' => 7,
//            ],
            //НТО
            [
                'id' => 69,
                'title' => 'НТО №1',
                'description' => 'НТО: Кировский район, №1',
                'layer_id' => 6,
            ],
            [
                'id' => 70,
                'title' => 'НТО №2',
                'description' => 'НТО: Кировский район, №2',
                'layer_id' => 6,
            ],
            [
                'id' => 71,
                'title' => 'НТО №3',
                'description' => 'НТО: Кировский район, №3',
                'layer_id' => 6,
            ],
            [
                'id' => 72,
                'title' => 'НТО №4',
                'description' => 'НТО: Кировский район, №4',
                'layer_id' => 6,
            ],
            [
                'id' => 73,
                'title' => 'НТО №5',
                'description' => 'НТО: Кировский район, №5',
                'layer_id' => 6,
            ],
            [
                'id' => 74,
                'title' => 'НТО №6',
                'description' => 'НТО: Кировский район, №6',
                'layer_id' => 6,
            ],
            [
                'id' => 75,
                'title' => 'НТО №1',
                'description' => 'НТО: Кировский район, №1',
                'layer_id' => 6,
            ],
            [
                'id' => 76,
                'title' => 'НТО №2',
                'description' => 'НТО: Кировский район, №2',
                'layer_id' => 6,
            ],
            [
                'id' => 77,
                'title' => 'НТО №3',
                'description' => 'НТО: Кировский район, №3',
                'layer_id' => 6,
            ],
            [
                'id' => 78,
                'title' => 'НТО №4',
                'description' => 'НТО: Кировский район, №4',
                'layer_id' => 6,
            ],
            [
                'id' => 79,
                'title' => 'НТО №5',
                'description' => 'НТО: Кировский район, №5',
                'layer_id' => 6,
            ],
            [
                'id' => 80,
                'title' => 'НТО №6',
                'description' => 'НТО: Кировский район, №6',
                'layer_id' => 6,
            ],
        ];

        foreach ($data as $value) {
            DB::table('geo_elements')->insert($value);
        }
    }
}
