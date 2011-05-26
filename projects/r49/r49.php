<?php
    include("../../header.php");
    include("../../menu.php");
    menu("projects");
?>

<ol>
    <FONT SIZE="5"><A HREF="http://pa23.github.com/projects/r49/r49.html"><B>r49</B></A> </FONT>
    |
    <FONT SIZE="5"><A HREF="http://pa23.github.com/projects/strcnt/strcnt.html"> strcnt</A></FONT>
</ol>

<B>r49. Ресурсы:</B>
<SPAN>
    <A HREF="https://github.com/pa23/r49">github.com</A> | 
    <A HREF="https://github.com/pa23/r49/downloads">Загрузки</A> | 
    <A HREF="https://github.com/downloads/pa23/r49/r49-11.10.QuickStart_ru.pdf">Быстрый старт (PDF)</A> | 
    <A HREF="http://ru.wikipedia.org/wiki/R49">ru.wikipedia.org</A>
</SPAN>
<P>
Программный комплекс, предназначенный для расчета удельных выбросов вредных веществ 
с отработавшими газами дизельных двигателей, испытываемых по стационарным циклам на 
соответствие требованиям Правил ЕЭК ООН №49 Ревизия 1 и Ревизия 4, Правил ЕЭК ООН 
№96 Ревизия 1, ОСТ 37.001.234-81, ГОСТ 17.2.2.05-97, ГОСТ 30574-98 и ГОСТ Р 51249-99 
<BR>
<B>r49</B> является свободным программным обеспечением и состоит из библиотеки <B>toxic</B> и программы <B>Qr49</B>. 
Программный комплекс написан на языке программирования C++ с использованием Qt.
<BR><BR>
<B>Основные возможности:</B>
<ul>
    <li>Расчет точек (значений частоты вращения коленчатого вала двигателя, крутящего момента, потерь мощности на привод вентилятора и т.д.) для всех стационарных испытательных циклов дизельных двигателей, описанных в приведенных выше нормативных документах.</li>
    <li>Расчет удельных выбросов вредных веществ с отработавшими газами по любому из стационарных испытательных циклов дизельных двигателей, описанных в приведенных выше нормативных документах.</li>
    <li>Расчет мощности двигателя, приведенной к нормальным атмосферным условиям (Правила ЕЭК ООН №85).</li>
    <li>"Свободный" расчет удельных выбросов по точкам цикла (напр., при снятии регулировочных характеристик, внешней скоростной характеристики и т.п.).</li>
    <li>Автоматическое создание каталога с исходными данными, конфигурацией, результатами и отчетами по завершению расчета.</li>
    <li>Использование программы Qr49 без загрузки графического интерфейса, что может быть востребовано, например, при пакетной обработке данных.</li>
</ul>
<B>Дополнительные возможности:</B>
<ul>
    <li>Использование в расчете крутящего момента брутто или мощности брутто при расчете мощности двигателя нетто.</li>
    <li>Использование в расчете "непосредственных" замеров расхода воздуха или рассчитываемых значений (при использовании во время испытаний измерительного сопла, согласно методике ЯМЗ).</li>
    <li>Обратный расчет относительно оксидов азота, т.е. возможность рассчитать концентрации оксидов азота, исходя из значений удельных выбросов для каждой точки испытательного цикла.</li>
    <li>Расчет степени рециркуляции отработавших газов, основываясь на замерах концентраций диоксида углерода в воздухе, поступающем в цилиндры двигателя, и в отработавших газах.</li>
    <li>Расчет коэффициента избытка воздуха с учетом рециркуляции отработавших газов.</li>
    <li>Оценка корректности замеров расхода воздуха двигателем, основываясь на замерах концентраций кислорода в отработавших газах.</li>
    <li>Использование в расчете выброса "твердых" частиц либо расхода разбавляющего воздуха, либо коэффициента разбавления.</li>
    <li>Предварительный расчет частот вращения коленчатого вала двигателя A, B и C для стационарных циклов с Евро-3 по Евро-6.</li>
    <li>Расчет дымности отработавших газов по испытательному циклу ELR.</li>
    <li>Импорт данных из сторонних файлов, полученных с помощью таких систем управления испытательными стендами как, например, AVL PUMA Open.</li>
</ul>
<B>Ограничения:</B>
<ul>
    <li>r49 предназначен для обработки результатов испытаний только дизельных двигателей.</li>
    <li>Расчет удельного выброса "твердых" частиц в r49 производится только для систем с частичным разбавлением и измерением потока.</li>
</ul>
<B>Люди, внесшие вклад в проект ценными советами:</B>
<ul>
    <li>Борис Романович Бланкштейн</li>
    <li>Евгений Константинович Шприц</li>
    <li>Алексей Иванович Атрохов</li>
    <li>Александр Малютин</li>
    <li>Андрей Кукушкин</li>
    <li>Дмитрий Епанешников</li>
</ul>
<B>Скриншоты:</B>
<P>
<IMG src="r49_scr1.png">
<IMG src="r49_scr2.png">
</P>
</P>

<?php
    include("../../footer.php");
?>
