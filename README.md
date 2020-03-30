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
Ssenariyga misol:
$ apple = yangi Apple ('yashil');
echo $ apple-> rang; // yashil
$ apple-> ovqat (50); // Istisno tashlash - daraxtda olma yeyolmaysiz
echo $ apple-> hajmi; // 1 - o'nlik
$ apple-> fallToGround (); // erga tushmoq
$ apple-> ovqat (25); // olmaning to'rtdan birini tishlash
echo $ apple-> hajmi; // 0,75
Ilovadagi sahifada bitta sahifada joylashgan barcha olma ko'rsatilishi kerak
tegishli tugma yordamida tasodifiy sonda hosil bo'lishi mumkin.
Har bir olma yonida tugmachalar yoki mos keladigan shakllar o'rnatilishi kerak
vazifada (yiqilish, foizni yeyish ...).
Vazifada hech qanday cheklovlar va talablar yo'q. Uning echimiga barcha yondashuvlar aniqlanadi
tizimni loyihalashda to'g'ri algoritmni tanlash va oldindan ko'rish qobiliyati
algoritmni ishlab chiqish uchun har qanday imkoniyatlar. Vazifani saqlash omboriga yuklash kerak
gitHub, buyruqlar tarixini saqlab. Ijodkorlik mamnuniyat bilan qabul qilinadi.
Установить advanced шаблон Yii2 фреймворка, в backend-приложении реализовать следующий
закрытый функционал (доступ в backend-приложение должен производиться только по паролю,
сложного разделения прав не требуется):
Написать класс/объект Apple с хранением яблок в БД MySql следуя ООП парадигме.
Функции
- упасть
- съесть ($percent - процент откушенной части)
- удалить (когда полностью съедено)
Переменные
- цвет (устанавливается при создании объекта случайным)
- дата появления (устанавливается при создании объекта случайным unixTmeStamp)
- дата падения (устанавливается при падении объекта с дерева)
- статус (на дереве / упало)
- сколько съели (%)
- другие необходимые переменные, для определения состояния.
Состояния
- висит на дереве
- упало/лежит на земле
- гнилое яблоко
Условия
Пока висит на дереве - испортиться не может.
Когда висит на дереве - съесть не получится.
После лежания 5 часов - портится.
Когда испорчено - съесть не получится.
Когда съедено - удаляется из массива яблок.
Пример результирующего скрипта:
$apple = new Apple('green');
echo $apple->color; // green
$apple->eat(50); // Бросить исключение - Съесть нельзя, яблоко на дереве
echo $apple->size; // 1 - decimal
$apple->fallToGround(); // упасть на землю
$apple->eat(25); // откусить четверть яблока
echo $apple->size; // 0,75
На странице в приложении должны быть отображены все яблоки, которые на этой же странице
можно сгенерировать в случайном кол-ве соответствующей кнопкой.
Рядом с каждым яблоком должны быть реализованы кнопки или формы соответствующие
функциям (упасть, съесть процент…) в задании.
Задача не имеет каких-либо ограничений и требований. Все подходы к ее решению определяют
способность выбора правильного алгоритма при проектировании системы и умение предусмотреть
любые возможности развития алгоритма. Задание должно быть выложено в репозиторий на
gitHub, с сохранением истории коммитов. Креативность только приветствуется.

