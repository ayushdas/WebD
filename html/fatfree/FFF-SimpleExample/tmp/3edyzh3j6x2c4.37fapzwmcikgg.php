<!-- 
A very simple response View template:
just echoes what the input data were.
The parameter "formData" is an array that
has been set as a global F3 variable, using $f3->set().
 -->

<h1>Thanks for your data, <?= $formData['name'] ?> ...</h1>
<p> Your colour was <?= $formData['colour'] ?> </p>
<hr />
<a href="<?= $BASE ?>/dataView">Show all data</a>
