<h1>Title: wpcf_delete_relation_meta</h1>
<p>Location: <a href="http://wp-types.com/documentation/user-guides/types-filters/wpcf_delete_relation_meta/">http://wp-types.com/documentation/user-guides/types-filters/wpcf_delete_relation_meta/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_delete_relation_meta</b> filter is used to allow the deletion of posts relations. If function returns true relation meta for all posts is deleted.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$delete</tt></dt>
    <dd>(<i>boolean</i>) (<i>required</i>) 
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(boolean)</tt></dt>
    <dd>Delete relationships.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>Delete parent - child relation from database.</p>
<pre>[code type="php"]
function my_wpcf_delete_relation_meta($delete)
{
    return true;
}
add_filter('wpcf_delete_relation_meta', 'my_wpcf_delete_relation_meta', 10, 1);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_delete_relation_meta is located in: includes/ajax.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.6.4</p>

