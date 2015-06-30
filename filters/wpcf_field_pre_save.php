<h1>Title: wpcf_field_pre_save</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_field_pre_save.php">http://iworks.pl/types/filters/wpcf_field_pre_save.php</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_field_pre_save</b> filter is used to filter edited data on "Edit
Group" and "Edit Usermeta Group" screens. It allows changes to submitted data before
it is saved to the database.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$field</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing field data to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(array)</tt></dt>
    <dd>Field data to save.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>Add default description for all "email" type fields which have empty descriptions.</p>
<pre>[code type="php"]
function my_wpcf_field_pre_save($)
{
    if (
        'email' == $field['type']
        && empty($field['description'])
    ) {
        $field['description'] = __('This is new description from filter.');
    }
}
add_filter('wpcf_field_pre_save', 'my_wpcf_field_pre_save', 10, 1);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_field_pre_save is located in: includes/fields-form.php, includes/usermeta-form.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>
