<?php
include_once ("./header.php");
include_once ("./onto_array.php");
include_once ("./appvars.php");
include_once ("./entity_helper.php");
include_once ("./db_helper.php");
?>

<div class="container bs-docs-container">
    <div class="row">
        <div class="col-md-3">
            <div class="bs-sidebar hidden-print" role="complementary">
                <ul class="nav bs-sidenav">

                    <li>
                        <a href="#overview">Overview</a>
                        <ul class="nav">
                            <li><a href="#overview-doctype">HTML5 doctype</a></li>
                            <li><a href="#overview-mobile">Mobile first</a></li>
                            <li><a href="#overview-responsive-images">Responsive images</a></li>
                            <li><a href="#overview-type-links">Typography and links</a></li>
                            <li><a href="#overview-normalize">Normalize</a></li>
                            <li><a href="#overview-container">Containers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#grid">Grid system</a>
                        <ul class="nav">
                            <li><a href="#grid-intro">Introduction</a></li>
                            <li><a href="#grid-media-queries">Media queries</a></li>
                            <li><a href="#grid-options">Grid options</a></li>
                            <li><a href="#grid-example-basic">Ex: Stacked-to-horizonal</a></li>
                            <li><a href="#grid-example-mixed">Ex: Mobile and desktops</a></li>
                            <li><a href="#grid-example-mixed-complete">Ex: Mobile, tablet, desktops</a></li>
                            <li><a href="#grid-responsive-resets">Responsive column resets</a></li>
                            <li><a href="#grid-offsetting">Offsetting columns</a></li>
                            <li><a href="#grid-nesting">Nesting columns</a></li>
                            <li><a href="#grid-column-ordering">Column ordering</a></li>
                            <li><a href="#grid-less">LESS mixins and variables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#type">Typography</a>
                        <ul class="nav">
                            <li><a href="#type-headings">Headings</a></li>
                            <li><a href="#type-body-copy">Body copy</a></li>
                            <li><a href="#type-emphasis">Emphasis</a></li>
                            <li><a href="#type-abbreviations">Abbreviations</a></li>
                            <li><a href="#type-addresses">Addresses</a></li>
                            <li><a href="#type-blockquotes">Blockquotes</a></li>
                            <li><a href="#type-lists">Lists</a></li>
                        </ul>
                    </li>
                    <li><a href="#code">Code</a></li>
                    <li>
                        <a href="#tables">Tables</a>
                        <ul class="nav">
                            <li><a href="#tables-example">Basic example</a></li>
                            <li><a href="#tables-striped">Striped rows</a></li>
                            <li><a href="#tables-bordered">Bordered table</a></li>
                            <li><a href="#tables-hover-rows">Hover rows</a></li>
                            <li><a href="#tables-condensed">Condensed table</a></li>
                            <li><a href="#tables-contextual-classes">Contextual classes</a></li>
                            <li><a href="#tables-responsive">Responsive tables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#forms">Forms</a>
                        <ul class="nav">
                            <li><a href="#forms-example">Basic example</a></li>
                            <li><a href="#forms-inline">Inline form</a></li>
                            <li><a href="#forms-horizontal">Horizontal form</a></li>
                            <li><a href="#forms-controls">Supported controls</a></li>
                            <li><a href="#forms-controls-static">Static control</a></li>
                            <li><a href="#forms-control-states">Control states</a></li>
                            <li><a href="#forms-control-sizes">Control sizing</a></li>
                            <li><a href="#forms-help-text">Help text</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#buttons">Buttons</a>
                        <ul class="nav">
                            <li><a href="#buttons-options">Options</a></li>
                            <li><a href="#buttons-sizes">Sizes</a></li>
                            <li><a href="#buttons-active">Active state</a></li>
                            <li><a href="#buttons-disabled">Disabled state</a></li>
                            <li><a href="#buttons-tags">Button tags</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#images">Images</a>
                    </li>
                    <li>
                        <a href="#helper-classes">Helper classes</a>
                        <ul class="nav">
                            <li><a href="#helper-classes-close">Close icon</a></li>
                            <li><a href="#helper-classes-carets">Carets</a></li>
                            <li><a href="#helper-classes-floats">Quick floats</a></li>
                            <li><a href="#helper-classes-center">Center content blocks</a></li>
                            <li><a href="#helper-classes-clearfix">Clearfix</a></li>
                            <li><a href="#helper-classes-show-hide">Showing and hiding content</a></li>
                            <li><a href="#helper-classes-screen-readers">Screen reader content</a></li>
                            <li><a href="#helper-classes-image-replacement">Image replacement</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#responsive-utilities">Responsive utilities</a>
                        <ul class="nav">
                            <li><a href="#responsive-utilities-classes">Available classes</a></li>
                            <li><a href="#responsive-utilities-print">Print classes</a></li>
                            <li><a href="#responsive-utilities-tests">Test cases</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
        <div class="col-md-9" role="main">
            <!-- Global Bootstrap settings
  ================================================== -->
            <div class="bs-docs-section">
                <div class="page-header">
                    <h1 id="overview">Overview</h1>
                </div>
                <p class="lead">Get the lowdown on the key pieces of Bootstrap's infrastructure, including our approach to better, faster, stronger web development.</p>

                <h3 id="overview-doctype">HTML5 doctype</h3>
                <p>Bootstrap makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype. Include it at the beginning of all your projects.</p>


                <h3 id="overview-mobile">Mobile first</h3>
                <p>With Bootstrap 2, we added optional mobile friendly styles for key aspects of the framework. With Bootstrap 3, we've rewritten the project to be mobile friendly from the start. Instead of adding on optional mobile styles, they're baked right into the core. In fact, <strong>Bootstrap is mobile first</strong>. Mobile first styles can be found throughout the entire library instead of in separate files.</p>
                <p>To ensure proper rendering and touch zooming, <strong>add the viewport meta tag</strong> to your <code>&lt;head&gt;</code>.</p>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">&quot;viewport&quot;</span> <span class="na">content=</span><span class="s">&quot;width=device-width, initial-scale=1.0&quot;</span><span class="nt">&gt;</span>
</code></pre></div>
                <p>You can disable zooming capabilities on mobile devices by adding <code>user-scalable=no</code> to the viewport meta tag. This disables zooming, meaning users are only able to scroll, and results in your site feeling a bit more like a native application. Overall we don't recommend this on every site, so use caution!</p>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">&quot;viewport&quot;</span> <span class="na">content=</span><span class="s">&quot;width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no&quot;</span><span class="nt">&gt;</span>
</code></pre></div>

                <h3 id="overview-responsive-images">Responsive images</h3>
                <p>Images in Bootstrap 3 can be made responsive-friendly via the addition of the <code>.img-responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.</p>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">&quot;...&quot;</span> <span class="na">class=</span><span class="s">&quot;img-responsive&quot;</span> <span class="na">alt=</span><span class="s">&quot;Responsive image&quot;</span><span class="nt">&gt;</span>
</code></pre></div>

                <h3 id="overview-type-links">Typography and links</h3>
                <p>Bootstrap sets basic global display, typography, and link styles. Specifically, we:</p>
                <ul>
                    <li>Set <code>background-color: #fff;</code> on the <code>body</code></li>
                    <li>Use the <code>@font-family-base</code>, <code>@font-size-base</code>, and <code>@line-height-base</code> attributes as our typographic base</li>
                    <li>Set the global link color via <code>@link-color</code> and apply link underlines only on <code>:hover</code></li>
                </ul>
                <p>These styles can be found within <code>scaffolding.less</code>.</p>

                <h3 id="overview-normalize">Normalize</h3>
                <p>For improved cross-browser rendering, we use <a href="http://necolas.github.io/normalize.css/" target="_blank">Normalize</a>, a project by <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a href="http://twitter.com/jon_neal" target="_blank">Jonathan Neal</a>.</p>

                <h3 id="overview-container">Containers</h3>
                <p>Easily center a page's contents by wrapping its contents in a <code>.container</code>. Containers set <code>max-width</code> at various media query breakpoints to match our grid system.</p>

            </div>

            <div class="bs-docs-section">
                <div class="page-header">
                    <h1 id="type">Typography</h1>
                </div>

                <!-- Headings -->
                <h2 id="type-headings">Headings</h2>
                <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
                <div class="bs-example bs-example-type">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><h1>h1. Bootstrap heading</h1></td>
                                <td class="info">Semibold 36px</td>
                            </tr>
                            <tr>
                                <td><h2>h2. Bootstrap heading</h2></td>
                                <td class="info">Semibold 30px</td>
                            </tr>
                            <tr>
                                <td><h3>h3. Bootstrap heading</h3></td>
                                <td class="info">Semibold 24px</td>
                            </tr>
                            <tr>
                                <td><h4>h4. Bootstrap heading</h4></td>
                                <td class="info">Semibold 18px</td>
                            </tr>
                            <tr>
                                <td><h5>h5. Bootstrap heading</h5></td>
                                <td class="info">Semibold 14px</td>
                            </tr>
                            <tr>
                                <td><h6>h6. Bootstrap heading</h6></td>
                                <td class="info">Semibold 12px</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/h6&gt;</span>
</code></pre></div>

                <p>Create lighter, secondary text in any heading with a generic <code>&lt;small&gt;</code> tag or the <code>.small</code> class.</p>
                <div class="bs-example bs-example-type">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><h1>h1. Bootstrap heading <small>Secondary text</small></h1></td>
                            </tr>
                            <tr>
                                <td><h2>h2. Bootstrap heading <small>Secondary text</small></h2></td>
                            </tr>
                            <tr>
                                <td><h3>h3. Bootstrap heading <small>Secondary text</small></h3></td>
                            </tr>
                            <tr>
                                <td><h4>h4. Bootstrap heading <small>Secondary text</small></h4></td>
                            </tr>
                            <tr>
                                <td><h5>h5. Bootstrap heading <small>Secondary text</small></h5></td>
                            </tr>
                            <tr>
                                <td><h6>h6. Bootstrap heading <small>Secondary text</small></h6></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading <span class="nt">&lt;small&gt;</span>Secondary text<span class="nt">&lt;/small&gt;&lt;/h6&gt;</span>
</code></pre></div>


                <!-- Body copy -->
                <h2 id="type-body-copy">Body copy</h2>
                <p>Bootstrap's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default).</p>
                <div class="bs-example">
                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
</code></pre></div>

                <!-- Body copy .lead -->
                <h3>Lead body copy</h3>
                <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
                <div class="bs-example">
                    <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;lead&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
</code></pre></div>

                <!-- Using LESS -->
                <h3>Built with Less</h3>
                <p>The typographic scale is based on two LESS variables in <strong>variables.less</strong>: <code>@font-size-base</code> and <code>@line-height-base</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>


                <!-- Emphasis -->
                <h2 id="type-emphasis">Emphasis</h2>
                <p>Make use of HTML's default emphasis tags with lightweight styles.</p>

                <h3>Small text</h3>
                <p>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of the parent. Heading elements receive their own <code>font-size</code> for nested <code>&lt;small&gt;</code> elements.</p>
                <p>You may alternatively use an inline element with <code>.small</code> in place of any <code>&lt;small&gt;</code></p>
                <div class="bs-example">
                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class="nt">&lt;/small&gt;</span>
</code></pre></div>


                <h3>Bold</h3>
                <p>For emphasizing a snippet of text with a heavier font-weight.</p>
                <div class="bs-example">
                    <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;strong&gt;</span>rendered as bold text<span class="nt">&lt;/strong&gt;</span>
</code></pre></div>

                <h3>Italics</h3>
                <p>For emphasizing a snippet of text with italics.</p>
                <div class="bs-example">
                    <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;em&gt;</span>rendered as italicized text<span class="nt">&lt;/em&gt;</span>
</code></pre></div>

                <div class="bs-callout bs-callout-info">
                    <h4>Alternate elements</h4>
                    <p>Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
                </div>

                <h3>Alignment classes</h3>
                <p>Easily realign text to components with text alignment classes.</p>
                <div class="bs-example">
                    <p class="text-left">Left aligned text.</p>
                    <p class="text-center">Center aligned text.</p>
                    <p class="text-right">Right aligned text.</p>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-left&quot;</span><span class="nt">&gt;</span>Left aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-center&quot;</span><span class="nt">&gt;</span>Center aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-right&quot;</span><span class="nt">&gt;</span>Right aligned text.<span class="nt">&lt;/p&gt;</span>
</code></pre></div>

                <h3>Emphasis classes</h3>
                <p>Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles.</p>
                <div class="bs-example">
                    <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                    <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                    <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                    <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                    <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-muted&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-primary&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-success&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-info&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-warning&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">&quot;text-danger&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
</code></pre></div>
                <div class="bs-callout bs-callout-info">
                    <h4>Dealing with specificity</h4>
                    <p>Sometimes emphasis classes cannot be applied due to the specificity of another selector. In most cases, a sufficient workaround is to wrap your text in a <code>&lt;span&gt;</code> with the class.</p>
                </div>


                <!-- Abbreviations -->
                <h2 id="type-abbreviations">Abbreviations</h2>
                <p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.</p>

                <h3>Basic abbreviation</h3>
                <p>For expanded text on long hover of an abbreviation, include the <code>title</code> attribute with the <code>&lt;abbr&gt;</code> element.</p>
                <div class="bs-example">
                    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">&quot;attribute&quot;</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;</span>
</code></pre></div>

                <h3>Initialism</h3>
                <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
                <div class="bs-example">
                    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">&quot;HyperText Markup Language&quot;</span> <span class="na">class=</span><span class="s">&quot;initialism&quot;</span><span class="nt">&gt;</span>HTML<span class="nt">&lt;/abbr&gt;</span>
</code></pre></div>


                <!-- Addresses -->
                <h2 id="type-addresses">Addresses</h2>
                <p>Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
                <div class="bs-example">
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                    <address>
                        <strong>Full Name</strong><br>
                        <a href="mailto:#">first.last@example.com</a>
                    </address>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Twitter, Inc.<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  795 Folsom Ave, Suite 600<span class="nt">&lt;br&gt;</span>
  San Francisco, CA 94107<span class="nt">&lt;br&gt;</span>
  <span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">&quot;Phone&quot;</span><span class="nt">&gt;</span>P:<span class="nt">&lt;/abbr&gt;</span> (123) 456-7890
<span class="nt">&lt;/address&gt;</span>

<span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Full Name<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;mailto:#&quot;</span><span class="nt">&gt;</span>first.last@example.com<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/address&gt;</span>
</code></pre></div>


                <!-- Blockquotes -->
                <h2 id="type-blockquotes">Blockquotes</h2>
                <p>For quoting blocks of content from another source within your document.</p>

                <h3>Default blockquote</h3>
                <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>
                <div class="bs-example">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre></div>

                <h3>Blockquote options</h3>
                <p>Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.</p>

                <h4>Naming a source</h4>
                <p>Add <code>&lt;small&gt;</code> tag for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
                <div class="bs-example">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;small&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">&quot;Source Title&quot;</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/small&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre></div>

                <h4>Alternate displays</h4>
                <p>Use <code>.pull-right</code> for a floated, right-aligned blockquote.</p>
                <div class="bs-example" style="overflow: hidden;">
                    <blockquote class="pull-right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">&quot;pull-right&quot;</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre></div>


                <!-- Lists -->
                <h2 id="type-lists">Lists</h2>

                <h3>Unordered</h3>
                <p>A list of items in which the order does <em>not</em> explicitly matter.</p>
                <div class="bs-example">
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

                <h3>Ordered</h3>
                <p>A list of items in which the order <em>does</em> explicitly matter.</p>
                <div class="bs-example">
                    <ol>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit</li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ol>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;ol&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span>
</code></pre></div>

                <h3>Unstyled</h3>
                <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
                <div class="bs-example">
                    <ul class="list-unstyled">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;list-unstyled&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

                <h3>Inline</h3>
                <p>Place all list items on a single line with <code>display: inline-block;</code> and some light padding.</p>
                <div class="bs-example">
                    <ul class="list-inline">
                        <li>Lorem ipsum</li>
                        <li>Phasellus iaculis</li>
                        <li>Nulla volutpat</li>
                    </ul>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;list-inline&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>

                <h3>Description</h3>
                <p>A list of terms with their associated descriptions.</p>
                <div class="bs-example">
                    <dl>
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                    </dl>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;dl&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span>
</code></pre></div>

                <h4>Horizontal description</h4>
                <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.</p>
                <div class="bs-example">
                    <dl class="dl-horizontal">
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                        <dt>Felis euismod semper eget lacinia</dt>
                        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                    </dl>
                </div>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">&quot;dl-horizontal&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span>
</code></pre></div>

                <div class="bs-callout bs-callout-info">
                    <h4>Auto-truncating</h4>
                    <p>Horizontal description lists will truncate terms that are too long to fit in the left column with <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once ("./foot.php");
?>
