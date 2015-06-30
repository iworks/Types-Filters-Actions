<h1>Title: wpcf_post_groups</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_post_groups.php">http://iworks.pl/types/filters/wpcf_post_groups/</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_post_groups</b> filter is used to filter groups of custom
fields after retrieving all the data about these groups.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$groups_all</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing groups to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$post</tt></dt>
    <dd>(<i>object</i>) current post as WP_Post object.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
    <dt><tt>$context</tt></dt>
    <dd>(<i>string</i>) usage context; can be 'group' or 'post_relationship'.</dd>
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Return_Values" id="Return_Values"></a><h2>Return Values</h2>
<dl>
    <dt><tt>(array)</tt></dt>
    <dd>Filtered array of all groups.</dd>
</dl>

<a name="Examples" id="Examples"></a><h2>Examples</h2>
<p>For users with low capabilites remove the field "logo".</p>
<pre>[code type="php"]
function my_wpcf_post_groups($groups_all, $post, $context)
{
    if ( 'group' == $context &amp;&amp; !curent_user_can('manage_options') ) {
        foreach( array_keys($groups_all) as $key) {
            unset($groups_all[$key]['fields']['logo']);
        }
    }
    return $groups_all;
}
add_filter('wpcf_post_groups', 'my_wpcf_post_groups', 10, 3);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_post_groups is located in: embedded/includes/fields-post.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 0.9.5</p>

<a name="See_Also" id="See_Also"></a><h2>See Also</h2>
<ul>
    <li><a href="wpcf_post_groups_all.html">wpcf_post_groups_all</a></li>
</ul>
