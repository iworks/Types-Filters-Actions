<h1>Title: wpcf_post_type_form</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_post_type_form.php">http://iworks.pl/types/filters/wpcf_post_type_form/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_post_type_form</b> filter is used to add elements to the Custom Post Type editing form.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$array</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) empty array.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
<dl>
    <dt><tt>$array</tt></dt>
    <dd>(<i>array</i>) Custom Post Type array with configuration.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(array)</tt></dt>
    <dd>array with extra form elements.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>Add a message before the "Save Custom Post Type" button.</p>
<pre>[code type="php"]
function my_wpcf_post_type_form($form, $ct)
{
    $form['my-add'] = array(
        '#type'=&gt;'markup',
        '#markup' =&gt; '&lt;p&gt;Be sure, ale fields are filled!&lt;/p&gt;',
    );
    return $form;

}
add_filter('wpcf_post_type_form', 'my_wpcf_post_type_form', 10, 2);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_post_type_form is located in: includes/custom-types-form.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>
