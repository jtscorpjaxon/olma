# olma
<p align="center">
    <a href="http://jtscorp.000webhostapp.com/" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Jtscorp: Olma daraxti o'zbekcha model</h1>
    <br>
</p>
Loyihaga qo'yilgan masala:

Kengaytirilgan Yii2  shablonini o'rnating, orqa dasturda quyidagilarni bajaring
yopiq funksiya :
OOP paradigmasidan so'ng MySql ma'lumotlar bazasida olma saqlanadigan Apple sinfi / ob'ektini yozing.
Vazifalari
- Yerda tushish
- yemoq ($ foiz - ajratilgan foizning foizi)
- o'chirib tashlamoq (to'liq iste'mol qilinganda)
O'zgaruvchilar
- rang (ob'ektni tasodifiy yaratishda o'rnatiladi)
- paydo bo'lish sanasi (ob'ektni yaratishda tasodifiy unixTmeStamp belgilanadi)
- yiqilish sanasi (ob'ekt daraxtdan tushganda belgilanadi)
- holat (daraxtda / tushib)
- ular qancha yeydilar (%)
- holatni aniqlash uchun boshqa zarur parametrlar.
Holati
- daraxtga osilgan
- yiqildi / erga yotdi
- chirigan olma
Shartlar
Daraxtga osilgan holda - yomon bo'lmaydi.
Daraxtga osilganida, ovqatlanish ishlamaydi.
5 soat yotgandan keyin - u buzadi.
Buzilib ketganda - ovqat ishlamaydi.
Ovqatlanganda - olma qatoridan chiqariladi.
<br>
Ssenariyga misol:<br>
$olma = new OlmaHosil();<br>
echo $olma-> rang; // yashil<br>
$olma-> yeyilgan (50); // Istisno - daraxtda olma yeyolmaysiz<br>
echo $olma-> olchami; // 1 - o'nlik<br>
$olma-> tushdi (); // yerga tushmoq<br>
$olma-> yeyigan (25); // olmaning to'rtdan birini tishlash<br>
echo $olma-> olchami; // 0,75<br>
Ilovadagi sahifada bitta sahifada joylashgan barcha olma ko'rsatilishi kerak
tegishli tugma yordamida tasodifiy sonda hosil bo'lishi mumkin.
Har bir olma yonida tugmachalar yoki mos keladigan shakllar o'rnatilishi kerak
vazifada (yiqilish, foizni yeyish ...).
Vazifada hech qanday cheklovlar va talablar yo'q. Uning echimiga barcha yondashuvlar aniqlanadi
tizimni loyihalashda to'g'ri algoritmni tanlash va oldindan ko'rish qobiliyati
algoritmni ishlab chiqish uchun har qanday imkoniyatlar. Vazifani saqlash omboriga yuklash kerak
gitHub, buyruqlar tarixini saqlab. Ijodkorlik mamnuniyat bilan qabul qilinadi.<br><br>

<img src="https://github.com/jtscorpjaxon/olma/blob/master/Screenshot.jpg" height="70%" width="70%" >
<img src="https://github.com/jtscorpjaxon/olma/blob/master/1.jpg" height="70%" width="70%">
<br>
# Выполнение тестового задания:

Установить advanced шаблон Yii2 фреймворка, в backend-приложении реализовать следующий
закрытый функционал (доступ в backend-приложение должен производиться только по паролю,
сложного разделения прав не требуется):
Написать класс/объект Apple с хранением яблок в БД MySql следуя ООП парадигме.

## Функции
- упасть
- съесть ($percent - процент откушенной части)
- удалить (когда полностью съедено)

## Переменные
- цвет (устанавливается при создании объекта случайным)
- дата появления (устанавливается при создании объекта случайным unixTmeStamp)
- дата падения (устанавливается при падении объекта с дерева)
- статус (на дереве / упало)
- сколько съели (%)
- другие необходимые переменные, для определения состояния.

## Состояния
- висит на дереве
- упало/лежит на земле
- гнилое яблоко

## Условия
Пока висит на дереве - испортиться не может.
Когда висит на дереве - съесть не получится.
После лежания 5 часов - портится.
Когда испорчено - съесть не получится.
Когда съедено - удаляется из массива яблок.
Пример результирующего скрипта:

$apple = new Apple('green');

echo $apple->color; // green

$apple->eat(50); // откусить пол яблока

echo $apple->size; // 0.5 - decimal

$apple->fallToGround(); // упасть на землю

$apple->eat(25); // откусить четверть яблока

echo $apple->size; // 0,75

На странице в приложении должны быть отображены все яблоки, которые на этой же странице
можно сгенерировать в случайном кол-ве соответствующей кнопкой.
Рядом с каждым яблоком должны быть реализованы кнопки или формы соответствующие
функциям (упасть, съесть процент…) в задании.

Yii 2 Advanced Project Apple tree model
=================================
Github Source: https://github.com/jtscorpjaxon/olma
## Test run:

Install the advanced Yii2 framework template, implement the following in the backend application
closed functionality (access to the backend application should be done only with a password,
complex separation of rights is not required):
Write an Apple class / object with apple storage in the MySql database following the OOP paradigm.

## Functions
- fall
- eat ($ percent - percentage of bitten off portion)
- remove (when fully eaten)

## Variables
- color (set when creating an object randomly)
- date of appearance (set when creating an object random unixTmeStamp)
- fall date (set when the object falls from the tree)
- status (on the tree / dropped)
- how much they ate (%)
- other necessary variables to determine the state.

## States
- hanging on a tree
- fell / lies on the ground
- rotten apple


