<h1>Title: wpcf_post_groups_all</h1>
<p>Location: <a href="http://iworks.pl/types/filters/wpcf_post_groups_all.php">http://iworks.pl/types/filters/wpcf_post_groups_all.php</a></p>

<a name="Description" id="Description"></a><h2>Description</h2>
<p>The <b>wpcf_post_groups_all</b> filter is used to filter groups data before
it is retrieved.</p>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$classes</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing ... to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
</dl>

<a name="Parameters" id="Parameters"></a><h2>Parameters</h2>
<dl>
    <dt><tt>$groups</tt></dt>
    <dd>(<i>array</i>) (<i>required</i>) Existing groups to be filtered.
    <dl>
        <dd>Default: <i>None</i></dd>
    </dl>
    </dd>
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
<p>For users with low capabilities remove the group with the slug "my-custom-data".</p>
<pre>[code type="php"]
function my_wpcf_post_groups($groups, $post, $context)
{
    $new = array();
    if ( 'group' == $context &amp;&amp; !curent_user_can('manage_options') ) {
        foreach($groups as $group) {
            if ( 'my-custom-data' == $group['slug'] ) {
                continue;
            }
            $new[] = $group;
        }
    }
    return $new;
}
add_filter('wpcf_post_groups', 'my_wpcf_post_groups', 10, 3);
[/code]</pre>

<a name="Source_File" id="Source_File"></a><h2>Source File</h2>
<p>wpcf_post_groups_all is located in: embedded/includes/fields-post.php.</p>

<a name="Change_Log" id="Change_Log"></a><h2>Change Log</h2>
<p>Since: 1.3</p>

<a name="See_Also" id="See_Also"></a><h2>See Also</h2>
<ul>
    <li><a href="wpcf_post_groups.html">wpcf_post_groups</a></li>
</ul>
