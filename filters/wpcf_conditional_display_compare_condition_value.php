<h1>Title: wpcf_conditional_display_compare_condition_value</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_conditional_display_compare_condition_value.php">http://iworks.pl/types/filters/wpcf_conditional_display_compare_condition_value/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_conditional_display_compare_condition_value</b> filter is used to filter a value used in conditional comparison. It is called before comparison is done and applied to a value that we compare against.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
   <dt><tt>$value</tt></dt>
    <dd>(<i>string</i>) (<i>required</i>) Existing value to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$cf_id</tt></dt>
    <dd>(<i>string</i>) (<i>required</i>) ID of custom field to compare.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$operation</tt></dt>
    <dd>(<i>string</i>) (<i>required</i>) Compare operator.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$cf_slug</tt></dt>
    <dd>(<i>string</i>) (<i>required</i>) Slug of custom field to compare.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$post</tt></dt>
    <dd>(<i>object</i>) (<i>required</i>) Post object.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(string)</tt></dt>
    <dd>Return new value to compare.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>For posts whose id is lower than 100, change the value we are comparing against from 4 to 1.</p>
<pre>[code type="php"]
function my_wpcf_conditional_display_compare_condition_value($value, $cf_id, $operation, $cf_slug, $post)
{
    if ( 4 == $value && $post->ID < 100 ) {
        return 1;
    }
    return $value;
}
add_filter('wpcf_conditional_display_compare_condition_value', 'my_wpcf_conditional_display_compare_condition_value', 10, 4);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_conditional_display_compare_condition_value is located in: embedded/classes/evaluate.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.0.2</p>
