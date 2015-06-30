<h1>Title: wpcf_form_field</h1>
<p>Location: <a href="http://wp-types.com/documentation/user-guides/types-filters/wpcf_form_field/">http://wp-types.com/documentation/user-guides/types-filters/wpcf_form_field/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_form_field</b> filter is used to filter the fields on the edit group
screen.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$fields</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing ... to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$form_data</tt></dt>
    <dd>(<i>array</i>) form data.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(array)</tt></dt>
    <dd>Fields array.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>Add default description to the field to avoid empty data being saved.</p>
<pre>[code type="php"]
function my_wpcf_form_field($fields, $form_data)
{
    if ( empty($fields['description']['#value'])) {
        $fields['description']['#value'] = 'avoid empty description';
    }
    return $fields;
}
add_filter('wpcf_form_field', 'my_wpcf_form_field', 10, 2);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_form_field is located in: includes/fields-form.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>
