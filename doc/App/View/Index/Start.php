<?php
$data = array(
    'title' => '简介',
);
View::tplInclude('Public/header', $data); ?>
    <div class="bs-header" id="content">
      <div class="container">
        <h1>简介</h1>
        <p>简要介绍SinglePHP，目录结构和Hello World。</p>
      </div>
    </div>
    <div class="container bs-docs-container">
      <div class="row">
        <div class="col-md-3">
          <div class="bs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-sidenav">
                <li>
                  <a href="#what">什么是SinglePHP</a>
                </li>
                <li>
                  <a href="#download">下载SinglePHP</a>
                </li>
                <li>
                  <a href="#dir">目录结构</a>
                </li>
                <li>
                  <a href="#hello_world">Hello World</a>
                </li>
            </ul>
          </div>
        </div>
        <div class="col-md-9" role="main">
            <div class="bs-docs-section">
              <div class="page-header">
                <h1 id="what">什么是SinglePHP</h1>
              </div>
              <p class="lead">SinglePHP是一个单文件PHP框架，适用于简单系统的快速开发，提供了简单的路由方式，抛弃了坑爹的PHP模板，采用原生PHP语法来渲染页面,同时提供了widget功能，简单且实用。</p>
              <p>目前SinglePHP由<a href="http://leo108.com" target='_blank'>leo108</a>开发维护，如果你希望参与到此项目中来，可以到<a href='https://github.com/leo108/SinglePHP' target='_blank'>Github</a>上Fork项目并提交Pull Request。</p>
            </div>
            <div class="bs-docs-section">
              <div class="page-header">
                <h1 id="download">下载SinglePHP</h1>
              </div>
              <p class="lead">可以通过github直接下载压缩好的代码文件。</p>
              <p><a class="btn btn-lg btn-primary" href="https://github.com/leo108/SinglePHP/archive/master.zip" >下载稳定版本</a></p>
              <p class="lead">当然也可以通过git直接clone项目,master分支为稳定版本，develop分支为开发版本，可能会有一些实验性的功能。</p>
                <div class="highlight">
                <p><code>git clone https://github.com/leo108/SinglePHP.git</code></p>
                </div>
            </div>
            <div class="bs-docs-section">
              <div class="page-header">
                <h1 id="dir">目录结构</h1>
              </div>
              <div class='highlight'>
              <pre>
              <code class="language-bash">├── App                                 #业务代码文件夹，可在配置中指定路径
│   ├── Controller                      #控制器文件夹
│   │   └── IndexController.class.php
│   ├── Lib                             #外部库
│   ├── Log                             #日志文件夹，需要写权限
│   ├── View                            #模板文件夹
│   │   ├── Index                       #对应Index控制器
│   │   │   └── Index.php
│   │   └── Public
│   │       ├── footer.php
│   │       └── header.php
│   ├── Widget                          #widget文件夹
│   │   ├── MenuWidget.class.php
│   │   └── Tpl                         #widget模板文件夹
│   │       └── MenuWidget.php
│   └── common.php                      #一些共用函数
├── SinglePHP.class.php                 #SinglePHP核心文件
└── index.php                           #入口文件</code>
              </pre>
              </div>
            </div>
            <div class="bs-docs-section">
              <div class="page-header">
                <h1 id="hello_world">Hello World</h1>
              </div>
              <p class="lead">只需增加3个文件，即可输出hello world。</p>
              <p>入口文件：index.php</p>
              <div class='highlight'>
              <pre><code class="language-php">&lt;?php
include './SinglePHP.class.php';         //包含核心文件
$config = array('APP_PATH' =&gt; './App/'); //指定业务目录为App
SinglePHP::getInstance($config)-&gt;run();  //撒丫子跑起来啦</code></pre>
              </div>
              <p>默认控制器：App/Controller/IndexController.class.php</p>
              <div class='highlight'>
              <pre><code class="language-php">&lt;?php
class IndexController extends Controller {       //控制器必须继承Controller类或其子类
    public function IndexAction(){               //默认Action
        $this-&gt;assign('content', 'Hello World'); //给模板变量赋值
        $this-&gt;display();                        //渲染吧骚年
    }
}</code></pre>
              </div>
              <p>模板文件：App/View/Index/Index.php</p>
              <div class='highlight'>
              <pre><code class="language-php">&lt;?php echo $content;</code></pre>
              </div>
              <p>在浏览器访问index.php，应该会输出</p>
              <div class='highlight'>
              <pre><code class="language-html">Hello World</code></pre>
              </div>
            </div>

        </div>
      </div>

    </div>

<?php View::tplInclude('Public/footer'); ?>
