<h1>Title: wpcf_fields_(type)_meta_data</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_fields_type_meta_data.php">http://iworks.pl/types/filters/wpcf_fields_type_meta_data.php</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_fields_(type)_meta_data</b> filter is used to filter data from
"Edit Group" or "Edit Usermeta Group" screen and allows to change each of the field's data
before processing and saving it to the database.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$data</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing field data to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$field</tt></dt>
    <dd>(<i>array</i>) Field information.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(array)</tt></dt>
    <dd>Field data</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>Always make the fields of "Numeric" type repetitive.</p>
<pre>[code type="php"]
function my_wpcf_fields_type_meta_data($data, $field)
{
    if ( 'numeric' == $field['type'] ) {
        $data['repetitive'] = 1;
    }
    return $data;
}
add_filter('wpcf_fields_type_meta_data', 'my_wpcf_fields_type_meta_data', 10, 1);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_fields_type_meta_data is located in: includes/fields.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>
