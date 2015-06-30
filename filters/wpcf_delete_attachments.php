<h1>Title: wpcf_delete_attachments</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_delete_attachments.php">http://iworks.pl/types/filters/wpcf_delete_attachments/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_delete_attachments</b> filter is used as a simple switch for turning
off the deleting of attachments.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$delete</tt></dt>
    <dd>(<i>boolean</i>) (<i>required</i>) Delete attachment flag.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(boolean)</tt></dt>
    <dd>Flag to delete attachment.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>Turn off deleting of attachments.</p>
<pre>[code type="php"]
function my_wpcf_delete_attachments($delete)
{
    return false;
}
add_filter('wpcf_delete_attachments', 'my_wpcf_delete_attachments', 10, 1);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_delete_attachments is located in: embedded/includes/fields-post.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.6</p>
