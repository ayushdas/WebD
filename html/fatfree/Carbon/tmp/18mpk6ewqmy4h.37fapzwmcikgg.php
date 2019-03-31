<!-- 
A very simple response View template:
just echoes what the input data were.
The parameter "formData" is an array that
has been set as a global F3 variable, using $f3->set().
 -->

<h1>How do your food choices impact the environment?</h1></br>
<p> Over an entire year, your consumption is contributing to this amount of your annual greenhouse gas emissions: <?= $viewResult['gGE'] ?></p>
<p> That is the equivalent of driving a regular petrol car for: <?= $viewResult['car'] ?> </p>
<p> That is the same as heating the average UK home for: <?= $viewResult['houseHeating'] ?> </p>
<!-- <a href="<?= $BASE ?>/dataView">Show all data</a>
<a href="<?= $BASE ?>/<?= $formData['diet'] ?>"><?= $formData['diet'] ?> page</a> -->