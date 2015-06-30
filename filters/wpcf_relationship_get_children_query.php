<h1>Title: wpcf_relationship_get_children_query</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_relationship_get_children_query.php">http://iworks.pl/types/filters/wpcf_relationship_get_children_query/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_relationship_get_children_query</b> filter is used to filter</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$classes</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing ... to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(array)</tt></dt>
    <dd></dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p></p>
<pre>[code type="php"]
function my_wpcf_relationship_get_children_query($)
{
}
add_filter('wpcf_relationship_get_children_query', 'my_wpcf_relationship_get_children_query', 10, 1);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_relationship_get_children_query is located in: embedded/models/relationship.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.0.0</p>
