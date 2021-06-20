<div class="ab-cont-body-l">
    <nav class="flex flex-col ab-cont-body-l-nav">
        <a class="ab-cont-body-l-nav-button" href="#aboutme"><?= __('About Me') ?></a>
        <a class="ab-cont-body-l-nav-button" href="#references"><?= __('References') ?></a>
        <a class="ab-cont-body-l-nav-button" href="#skills"><?= __('Skills') ?></a>
        <a class="ab-cont-body-l-nav-button" href="#wishes"><?= __('Wishes') ?></a>
        <a class="ab-cont-body-l-nav-button" href="#whyme"><?= __('Why me?') ?></a>
    </nav>
</div>
<div class="ab-cont-body-r">
    <section id="aboutme" class="about-cont-ss-sect">
        <h2 class="about-cont-ss-sect-title">Hello,</h2>
        <div class="about-cont-ss-sect-body ab-cont-body-r-text">
            <p class="ab-cont-body-r-text-par">
                <?= __("My name is Richard, I am a <b>senior fullstack product developer</b> and <b>digital marketing expert</b> with more than 8 years of experience. 
                I currently live and work from Paris in France. 
                In addition to French, I speak fluently English, making me fit to work inside companies operating in an international environment.") ?>
            </p>
            <h3>Missions</h3>
            <p class="ab-cont-body-r-text-par">
                <?= __("<b>My job consists of designing, building, and deploying</b> clean, secure, reliable, performance / SEO-aware websites and applications; using a framework, CMS, or from scratch. Whatever their complexity!") ?>
            </p>
            <h3>Profile</h3>
            <p class="ab-cont-body-r-text-par">
                <?= __("If you're wondering <b>what a product developer is</b>, you can see me as a mix between a full stack developer, a UI/UX designer, and a digital product manager. 
                As such I am able to handle autonomously a digital project, from start to finish or only over a specific field.") ?>
            </p>
            <h3>Soft Skills</h3>
            <p class="ab-cont-body-r-text-par">
                <?= __("One of mi BIGGEST strength is to be able to learn fast, address new challenges cleverly and be proactive in finding the best solution. This is why I am always ready to acquire new skills, and take advantage of each experience to perfect my know-how.") ?>
            </p>
            <p class="ab-cont-body-r-text-par">
                <?= __("I am someone with a great professional conscience. I take every subject and every project seriously. As a former entrepreneur, I know the stress and the importance of each mission which sometimes defines the survival of a company or a business.") ?>
            </p>
            <p class="ab-cont-body-r-text-par">
                <?= __("However, being conscientious is not everything. I know that success is also a matter of human relationships. So I strive to always create the best human conditions so that together we reach your business goals.") ?>
            </p>
        </div>
    </section>

    <section id="references" class="about-cont-ss-sect">
        <h2 class="about-cont-ss-sect-title">References</h2>
        <div class="about-cont-ss-sect-body">
            <p class="ab-cont-body-r-text-par about-cont-ss-sect-body-excerpt">
                <?= __("This is some of people I work with contributing at technical or management level") ?>
            </p>
            <div class="ab-cont-grid-card-list">

            </div>
        </div>
    </section>

    <section id="skills" class="about-cont-ss-sect">
        <h2 class="about-cont-ss-sect-title">Skills</h2>
        <div class="about-cont-ss-sect-body">
            <p class="ab-cont-body-r-text-par about-cont-ss-sect-body-excerpt">
                <?= __("My skill field has a very wide range and I am highly qualified in each of them using the best tools, systems and frameworks of the market.") ?>
            </p>
            <div class="ab-cont-grid-card-list">
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Front Development</h3>
                    <div class="ab-cont-grid-card-body">
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='javascript']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='HTML']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='CSS']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='Bootstrap']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='React']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='nextjs']"); ?>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— BackEnd development</h3>
                    <div class="ab-cont-grid-card-body">
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='php']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='symfony']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='node-js']"); ?>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— CMS development</h3>
                    <div class="ab-cont-grid-card-body">
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='Prestaskop']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='Wordpress']"); ?>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Dev Ops & testing</h3>
                    <div class="ab-cont-grid-card-body">
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='capistrano']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='Jenkins']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='docker']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='selenium']"); ?>
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='jest']"); ?>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Development tools</h3>
                    <div class="ab-cont-grid-card-body">
                        <?= do_shortcode("[rd_wp_plg_stack_lib_sc id='git']"); ?>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section id="wishes" class="about-cont-ss-sect">
        <h2 class="about-cont-ss-sect-title">Wishes & Pricing</h2>
        <div class="about-cont-ss-sect-body">
            <p class="ab-cont-body-r-text-par about-cont-ss-sect-body-excerpt">
                <?= __("In view of the large number of requests, make sure you took notice of my work and / or mission wishes, it will save us time") ?>
            </p>
            <div class="ab-cont-grid-card-list">
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— On-site or Remote?</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("My peference goes to working remotely") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("However, we can discuss <b>working on-site from time to time</b>") ?>
                        </p>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Work place & meeting</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("I work from <b>Paris</b>, France. This is where we can meet") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("However, if necessary, for exceptional occasions, <b>I can travel to your city</b> in France, UK or USA") ?>
                        </p>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Project types</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("I like giving myself new challenges. Also, I can work on any project, as long as it using web technologies like <b>React, Symfony, NodeJS or Wordpress</b>") ?>
                        </p>

                        <p class="ab-cont-body-r-text-par">
                            > <?= __("Regarding <b>new customers</b>, I will always prefer <b>simple and short projects</b>. If we already knew each other, I will be pleased to work or more complex projects as I love challenges") ?>
                        </p>

                        <p class="ab-cont-body-r-text-par">
                            > <?= __("Mobile apps projects are always welcome") ?>
                        </p>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— TJM / Pricing</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("My fees depend on the project, mission duration, work place, ...") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("Consider my fees into a range of <b>450€ - 700€ / day</b>") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("Please <a href='/contact'>contact me</a> and describe your project for a better visibility") ?>
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section id="whyme" class="about-cont-ss-sect">
        <h2 class="about-cont-ss-sect-title">10 reasons why</h2>
        <div class="about-cont-ss-sect-body">
            <p class="ab-cont-body-r-text-par about-cont-ss-sect-body-excerpt">
                <?= __("While a call and a meeting will always be the better option to figure me out, this is 10 soft and hard skills making me the perfect partneer for your project") ?>
            </p>
            <div class="ab-cont-grid-card-list">
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">1 — Geography</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("Are you in France? Working with someone you can <b>meet in hours</b> is a good practice.") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("You don't live in Paris? We <b>can meet anywhere in France</b> or eventually EU.") ?>
                        </p>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">2 — Culture</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("Willing to address <b>french, european or us customers</b>?") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            <?= __("Enjoy working with someone who knows the foreground and the background of those <b>markets and cultures</b>.") ?>
                        </p>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">3 — Language barrier</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("As I speak <b>French</b> & <b>English</b> (oral & written), you have more options to exchange.") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("That also means I am able to work on <b>projects requiring translations and correct french</b>.") ?>
                        </p>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">4 — Listening</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("I know how to listening and adapt my communication <b>to ensure that your needs are fully understood</b>.") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("Don't underestimate this scope, most of projects fail because of communication issues") ?>
                        </p>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">5 — Experience</h3>
                    <div class="ab-cont-grid-card-body">

                        <p class="ab-cont-body-r-text-par">
                            + <?= __("Multi-role experience (entrepreneur, senior employee even scrum master)") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            + <?= __("Multi-project experience (social network, marketplace, online shop, production monioring app and many more...)") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            + <?= __("8 years of coding, testing (unit, auto, ...), debugging, deploying") ?>
                        </p>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">6 — Wide Skills</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("As modern projects becoming more and more complex, you will enjoy my wide range of hard, soft and technical skills") ?>
                        </p>
                    </div>
                </section>

                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">7 — Agilist</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("I am a <b>Scrumban</b> and <b>agile methodologies expert</b> working with this methodology for years.") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("Plus I manage a blog teaching people willing to make their debut with this methodology") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            > <?= __("You don't use Agile or don't love it? No worries, I know how to adapt") ?>
                        </p>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">8 — E-Commerce expert</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            <?= __("...") ?>
                        </p>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">10 — Trust your eyes</h3>
                    <div class="ab-cont-grid-card-body">
                        <p class="ab-cont-body-r-text-par">
                            <?= __("How do you feel while browsing through my website and checking out my digital identity? Did you notice the attention I put on every details, UI, UX, words, ...? There's no hazard in it ") ?>
                        </p>
                        <p class="ab-cont-body-r-text-par">
                            <?= __("Then let me tell you that the professionalism I put into my work to promote my work and image for free, this is only a small part of what I can do for you while being well paid") ?>
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>