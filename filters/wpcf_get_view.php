<h1>Title: wpcf_get_view</h1>
<p>Location: <a href="http://wp-types.com/documentation/user-guides/types-filters/wpcf_get_view/">http://wp-types.com/documentation/user-guides/types-filters/wpcf_get_view/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_get_view</b> filter is used to filter the outputted HTML used on the post
editing screen in the modal windows which control the Types fields.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$html</tt></dt>
    <dd>(<i>string</i>) (<i>required</i>) Existing modal window content to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$name</tt></dt>
    <dd>(<i>string</i>) modal windows name.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$data</tt></dt>
    <dd>(<i>array</i>) any data used on this screen, including the actually edited post.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(string)</tt></dt>
    <dd>Modal window content.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>Add a header to the modal window:</p>
<pre>[code type="php"]
function my_wpcf_get_view($html, $name, $data)
{
    return 'This is added string.'.$html;
}
add_filter('wpcf_get_view', 'my_wpcf_get_view', 10, 3);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_get_view is located in: embedded/classes/loader.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.4</p>
