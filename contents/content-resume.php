<?php

namespace Rd\Wp\Theme\SandPortfolio;

$experiences = get_experiences();

?>

<div class="ab-cont-body-l">
    <nav class="flex flex-col ab-cont-body-l-nav">
        <a class="ab-cont-body-l-nav-button" href="#summary"><?= __('Summary') ?></a>
        <a class="ab-cont-body-l-nav-button" href="#experiences"><?= __('Experiences') ?></a>
        <a class="ab-cont-body-l-nav-button" href="#skills"><?= __('Skills') ?></a>
        <a class="ab-cont-body-l-nav-button" href="#tech"><?= __('Technologies') ?></a>
        <a class="ab-cont-body-l-nav-button" href="#wishes"><?= __('Wishes') ?></a>
    </nav>
</div>
<div class="ab-cont-body-r">
    <section id="summary" class="about-cont-ss-sect about-cont-ss-sect--summary">
        <h2 class="about-cont-ss-sect-title">Summary</h2>
        <div class="about-cont-ss-sect-body ab-cont-body-r-text">
            <p><i>Hello 👋, In a hurry? The <q>summary</q> is for you!</i></p>
            <p class="ab-cont-body-r-text-par">
                <?=
                __("My name is Richard Dieud, I'm a <b>30 yo</b> agile <b>product manager</b> and former <b>fullstack developer</b> with 9 years of experience including  <b>5 as a product manager</b>.")
                ?>
            </p>
            <p style="display: none">[CTA:CHECK_PORTFOLIO]</p>
        </div>
        <div class="about-cont-ss-sect-body ab-cont-body-r-text">
            <h3>— Achievements</h3>
            <p class="ab-cont-body-r-text-par">
                <?=
                __("<b>Dozens of use cases</b>, mostly in <b>e-commerce</b> and <b>social network</b> realms.
                Rolled out and maintained <b>B2C online stores</b>, <b>B2C/B2B marketplaces</b>, <b>B2C media-centered social networks</b>.")
                ?>
            </p>
            <ul style="line-height: 1.8">
                <li>✅ <b>+10,000 users</b> benefited from my work</li>
                <li>✅ <b>+5M€ in revenue</b> for companies</li>
            </ul>
            <h4 class="about-cont-achv-card-title"><span style="font-size: 30px;">⬇</span> Latest Achievement (Product Manager) <span style="font-size: 30px;">⬇</span></h4>
            <div class="about-cont-achv-card">
                <p class="about-cont-achv-card-block-l"><img title="Wishibam" aly="wishibam logo" src="/app/themes/sand-portfolio-theme/assets/media/img/company/wishibam.jpg" /></p>
                <div class="about-cont-achv-card-block-r">
                    <h4 class="about-cont-achv-card-block-title">Omnicanal Marketplace Study Case</h4>
                    <h5 class="about-cont-achv-card-block-h1">— Problem</h5>
                    <p class="about-cont-achv-card-block-bdy">
                        Between 2010-2019, sellers in-store traffic dropped by 60%, e-commerce turnover increased by +188%.
                        As a result, stores are closing (+57% between 2012-2017), real estate assets valuation is falling.
                        COVID-19 lock downs have worsen the sellers fate.
                    </p>

                    <h5 class="about-cont-achv-card-block-h1">— Solutions</h5>
                    <ul class="about-cont-achv-card-block-bdy" style="line-height: 1.8">
                        <li>🚩 Web-to-store omnicanal Saas solution for shopping malls</li>
                        <li>🚩 Support sellers in building their websotre in accordance with our API</li>
                        <li>🚩 Backend interface to monitor stock, sales, orders in real-time</li>
                        <li>🚩 Product catalog importer system assisted with AI</li>
                    </ul>

                    <h5 class="about-cont-achv-card-block-h1">— Impacts</h5>
                    <ul class="about-cont-achv-card-block-bdy" style="line-height: 1.8;">
                        <li>✅ Dozens sellers survived COVID-19 lockdowns</li>
                        <li>✅ Deployed in Lyon, Angers, Nice, Versailles</li>
                        <li>✅ <span class="ab-cont-icon">↗</span>12% sales for sellers</li>
                        <li>✅ <span class="ab-cont-icon">↗</span>32% in-store traffic</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="about-cont-ss-sect-body ab-cont-body-r-text">
            <h3>— References</h3>
            <ul class="ab-cont-body-r-text-par">
                <li class="...">👕 Clothing (<b>Catimini</b>, <b>Kidiliz</b>, <b>Tartine-Et-Chocolat</b>)</li>
                <li class="...">👙 Lingerie (<b>Yse</b>)</li>
                <li class="...">🐶 Animal Foods (<b>Ultra Premium Direct</b>)</li>
                <li class="...">🕸 Marketing <b>SaaS B2B solutions</b> startups (<b>Wishibam</b>)</li>
            </ul>
            <p style="display: none">[CTA:CHECK MY EXPERIENCES]</p>
        </div>
        <div class="about-cont-ss-sect-body ab-cont-body-r-text">
            <h3>— What & How I Do</h3>
            <ul class="ab-cont-body-r-text-par" style="line-height: 1.8">
                <li>- <span class="...">🤩</span> <?= __("Build solutions that make <b>users happy</b>") ?></li>
                <li>- <span class="...">🛣</span> <?= __("Build & update the <b>roadmap</b>") ?></li>
                <li>- <span class="...">📈</span> <?= __("Nurture <b>traffic growth</b>, <b>conversion rate</b> and <b>engagement</b>") ?></li>
                <li>- <span class="...">🎤</span> <?= __("Define the product <b>vision</b>") ?></li>
                <li>- <span class="...">🎯</span> <?= __("Collect & <b>prioritize</b> user problems, <b>ideate</b> solutions, define <b>goals and metrics</b> after a proper user <b>segmentation</b>") ?></li>
                <li>- <span class="...">🤨</span> <?= __("Decrease the risk with <b>user testings</b>, <b>MVP</b>") ?></li>
                <li>- <span class="...">🙌</span> <?= __("Write <b>specifications</b> for the tech team, a bit of <b>QA</b>") ?></li>
                <li>- <span class="...">🔎</span> <?= __("Assess <b>results</b> and <b>iterate</b>") ?></li>
            </ul>
            <p style="display: none">[CTA:CHECK MY USES CASES]</p>
        </div>
        <div class="about-cont-ss-sect-body ab-cont-body-r-text">
            <h3>— Languages</h3>
            <ul class="ab-cont-body-r-text-par">
                <li><span class="...">🇫🇷</span> <?= __("<b>French</b> (Native language)") ?></li>
                <li><span class="...">🇺🇸</span> <?= __("<b>English</b> (Good profesional level)") ?></li>
            </ul>
            <div style="display: none">
                <p style="font-size: 12px; margin-bottom: 8px">Want to hear me talking?</p>
                <p>[CTA:CHECK MY PODCASTS]</p>
            </div>
        </div>
        <div class="about-cont-ss-sect-body ab-cont-body-r-text">
            <h3>— Strengths</h3>
            <ul class="ab-cont-strengths">
                <li><b><?= __("Soft Skills") ?></b>:</li>
                <li><?= __("Leadership") ?></li>
                <li>▪</li>
                <li><?= __("Saying No") ?></li>
                <li>▪</li>
                <li><?= __("Agility") ?></li>
                <li>▪</li>
                <li><?= __("Learning Fast") ?></li>
                <li>▪</li>
                <li><?= __("Entrepreuneurial mindset") ?></li>
                <li>▪</li>
                <li><?= __("Doer") ?></li>
            </ul>
            <ul class="ab-cont-strengths">
                <li><b><?= __("Hard Skills") ?></b>:</li>
                <li><?= __("User Experience") ?></li>
                <li>▪</li>
                <li><?= __("Product Management") ?></li>
                <li>▪</li>
                <li><?= __("Digital Marketing") ?></li>
                <li>▪</li>
                <li><?= __("Scrum & Agile Coaching") ?></li>
                <li>▪</li>
                <li><?= __("Technical skills") ?></li>
                <li>▪</li>
                <li><?= __("User Interface Design") ?></li>
            </ul>
        </div>
        <div class="about-cont-ss-sect-body ab-cont-body-r-text">
            <h3>— Education</h3>
            <ul class="ab-cont-body-r-text-par">
                <li style="font-weight: bold"><span class="...">🎓</span> <?= __("B.S in Computer Science & Project Management") ?></li>
                <li style="font-size: 13px">Sciecnes-U, Lyon FR</li>
                <li style="font-size: 13px">2009 - 2012</li>
            </ul>
        </div>
    </section>

    <section id="experiences" class="about-cont-ss-sect jss-about-cont-ss-sect">
        <div class="about-cont-ss-sect-title-row jss-about-cont-ss-sect-title-row">
            <h2 class="about-cont-ss-sect-title">Experiences</h2>
            <button class="about-cont-ss-sect-title-visible-btn jss-about-cont-ss-sect-title-visible-btn" app-type="visible">
                <img class="about-cont-ss-sect-title-visible-icon" src="https://img.icons8.com/material-outlined/24/000000/visible--v1.png" />
            </button>
            <button class="about-cont-ss-sect-title-visible-btn jss-about-cont-ss-sect-title-visible-btn hidden" app-type="closed">
                <img class="about-cont-ss-sect-title-visible-icon" src="https://img.icons8.com/material-outlined/24/000000/closed-eye.png" />
            </button>
        </div>

        <div class="about-cont-ss-sect-body jss-about-cont-ss-sect-body">
            <p class="ab-cont-body-r-text-par about-cont-ss-sect-body-excerpt">
            </p>
            <div class="grid ab-cont-grid-card-list">
                <?php foreach ($experiences as $exp) : ?>
                    <?php $GLOBALS['page_about']['experience'] = $exp ?>
                    <?= get_template_part("template-parts/experience-card"); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="skills" class="about-cont-ss-sect jss-about-cont-ss-sect">
        <div class="about-cont-ss-sect-title-row jss-about-cont-ss-sect-title-row">
            <h2 class="about-cont-ss-sect-title">Profesional Skills</h2>
            <button class="about-cont-ss-sect-title-visible-btn jss-about-cont-ss-sect-title-visible-btn hidden" app-type="visible">
                <img class="about-cont-ss-sect-title-visible-icon" src="https://img.icons8.com/material-outlined/24/000000/visible--v1.png" />
            </button>
            <button class="about-cont-ss-sect-title-visible-btn jss-about-cont-ss-sect-title-visible-btn" app-type="closed">
                <img class="about-cont-ss-sect-title-visible-icon" src="https://img.icons8.com/material-outlined/24/000000/closed-eye.png" />
            </button>
        </div>
        <div class="about-cont-ss-sect-body jss-about-cont-ss-sect-body hidden">
            <p class="ab-cont-body-r-text-par about-cont-ss-sect-body-excerpt">
                <?= __("This is a summary of the type of daily tasks I usually perform during my professional or personal projects") ?>
            </p>
            <div class="ab-cont-grid-card-list">
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Agile & Scrum</h3>
                    <div class="ab-cont-grid-card-body">
                        <ul style="line-height: 1.5;">
                            <li>- Recite my servant leadership oath upon awakening (please, don't kill your team)</li>
                            <li>- Promote agile principles to all stakeholders</li>
                            <li>- Hold agile training sessions</li>
                            <li>- Help the Product Owner in writing the stories</li>
                            <li>- Negotiate the addition of non-business value tickets (Spike, Technical debt, Test, ...)</li>
                            <li>- Prioritize the backlog</li>
                            <li>- Ensure stories readiness</li>
                            <li>- Facilitate interactions between technical experts</li>
                            <li>- Report progress & issues to the customer and get feedbacks over how to solve them asap</li>
                            <li>- Facilitate agile ceremonies (Sprint planning, DSM, sprint review, retrospective)</li>
                            <li>- Monitor the team’s velocity and raise alerts</li>
                            <li>- Adjust the sprint duration based on the velocity</li>
                        </ul>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Digital Marketing</h3>
                    <div class="ab-cont-grid-card-body">
                        <ul style="line-height: 1.5;">
                            <p><b>Strategy</b></p>
                            <li>- Setting up a Marketing Plan</li>
                            <br />
                            <p><b>E-commerce</b></p>
                            <li>- Updating the product catalogue & promotions</li>
                            <br />
                            <p><b>Traffic management</b></p>
                            <li>- SEO Strategy</li>
                            <li>- Social Media Ads Campaign</li>
                            <li>- Email Marketing Campaigns</li>
                            <br />
                            <p><b>Data analytics</b></p>
                            <li>- Analyzing and optimizing the customer journey using data</li>
                            <br />
                            <p><b>Social Media</b></p>
                            <li>- Animating the community on social networks</li>
                            <li>- Handling bad buzz</li>
                            <br />
                            <p><b>But also...</b></p>
                            <li>- Setting up web alerts</li>
                        </ul>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Product</h3>
                    <div class="ab-cont-grid-card-body">
                        <ul style="line-height: 1.5;">
                            <li>- Work with the management to define the product vision, scope, definition-of-done and goals</li>
                            <li>- Brainstorm to land a User Requirements Document</li>
                            <li>- Form a clear product strategy</li>
                            <li>- Create and drive the roadmap</li>
                            <li>- Write the backlog</li>
                            <li>- Collaborate cross-functionally with internal stakeholders from UX, UX Research, Marketing, Legal, and Tech</li>
                            <li>- Evangelize the product's vision internally and externally</li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section id="tech" class="about-cont-ss-sect jss-about-cont-ss-sect">
        <div class="about-cont-ss-sect-title-row jss-about-cont-ss-sect-title-row">
            <h2 class="about-cont-ss-sect-title">Technologies</h2>
            <button class="about-cont-ss-sect-title-visible-btn jss-about-cont-ss-sect-title-visible-btn hidden" app-type="visible">
                <img class="about-cont-ss-sect-title-visible-icon" src="https://img.icons8.com/material-outlined/24/000000/visible--v1.png" />
            </button>
            <button class="about-cont-ss-sect-title-visible-btn jss-about-cont-ss-sect-title-visible-btn" app-type="closed">
                <img class="about-cont-ss-sect-title-visible-icon" src="https://img.icons8.com/material-outlined/24/000000/closed-eye.png" />
            </button>
        </div>
        <div class="about-cont-ss-sect-body jss-about-cont-ss-sect-body hidden">
            <p class="ab-cont-body-r-text-par about-cont-ss-sect-body-excerpt">
                <?= __("As a PM or Scrum Master, technical skills are a tremendous advantage as they help close the communication gap between team members. In addition, they help to improve prioritization and planning in setting up the roadmap.") ?>
            </p>
            <div class="ab-cont-grid-card-list">
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Design</h3>
                    <div class="ab-cont-grid-card-body">
                        <div class="ab-cont-stack-list">
                            <span><img src="https://img.icons8.com/color/48/000000/webflow.png" title="Webflow" alt="Webflow" /></span>
                            <span><img src="https://img.icons8.com/color/48/000000/figma.png" title="Nextjs" alt="Nextjs" /></span>
                            <span><img src="https://cdn.serif.com/affinity/img/global/logos/affinity-designer-icon-090520190839.svg" title="Affinity Designer" alt="Affinity Designer" /></span>
                            <span><img src="https://cdn.serif.com/affinity/img/global/logos/affinity-photo-icon-090520190839.svg" title="Affinity Photo" alt="Affinity Photo" /></span>
                            <span><img src="https://cdn.serif.com/affinity/img/global/logos/affinity-publisher-icon-090520190839.svg" title="Affinity Publisher" alt="Affinity Publisher" /></span>
                        </div>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Web Front</h3>
                    <div class="ab-cont-grid-card-body">
                        <div class="ab-cont-stack-list">
                            <span><img src="https://img.icons8.com/color/48/000000/react-native.png" title="React" alt="React" /></span>
                            <span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Nextjs-logo.svg/207px-Nextjs-logo.svg.png" title="Nextjs" alt="Nextjs" /></span>
                            <span><img src="https://img.icons8.com/color/48/000000/javascript.png" title="Javascript" alt="Javascript" /></span>
                            <span><img src="https://img.icons8.com/color/48/000000/html-5--v1.png" title="HTML" alt="HTML" /></span>
                            <span><img src="https://img.icons8.com/color/48/000000/css3.png" title="CSS3" alt="CSS3" /></span>
                            <span><img src="https://img.icons8.com/color/48/000000/bootstrap.png" title="Bootstrap" alt=Bootstrap /></span>
                            <span><img src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.cb8046c163f77190406dfbf4dec89848.svg" title="Tailwind" alt=Tailwind /></span>
                            <span><img src="https://material-ui.com/static/logo.png" title="Material UI" alt=Material UI /></span>
                        </div>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Web Back</h3>
                    <div class="ab-cont-grid-card-body">
                        <div class="ab-cont-stack-list">
                            <span><img src="https://img.icons8.com/color/48/000000/symfony.png" title="Symfony" alt="Symfony" /></span>
                            <span><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1NTQuNzQiIGhlaWdodD0iMzIwLjYiIHZpZXdCb3g9IjAgMCA1NTQuNzQgMzIwLjYiPjx0aXRsZT5BUEkgcGxhdGZvcm0gYm9yZGVsMjwvdGl0bGU+PGcgaWQ9IlNwaWRlciI+PGcgaWQ9Il9Hcm91cGVfIiBkYXRhLW5hbWU9IiZsdDtHcm91cGUmZ3Q7Ij48ZWxsaXBzZSBpZD0iX1RyYWPDqV8iIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSZndDsiIGN4PSIxODcuMTEiIGN5PSIyNDguNzMiIHJ4PSI0MS44MSIgcnk9IjEwLjU1IiBzdHlsZT0iZmlsbDojMWQxZTFjO29wYWNpdHk6MC4yIi8+PGVsbGlwc2UgaWQ9Il9UcmFjw6lfMiIgZGF0YS1uYW1lPSImbHQ7VHJhY8OpJmd0OyIgY3g9IjEwMC42MSIgY3k9IjI0Ni40NCIgcng9IjQxLjgxIiByeT0iMTAuNTUiIHN0eWxlPSJmaWxsOiMxZDFlMWM7b3BhY2l0eTowLjIiLz48ZWxsaXBzZSBpZD0iX1RyYWPDqV8zIiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBjeD0iMTIxLjE4IiBjeT0iMzA4LjY1IiByeD0iNDEuODEiIHJ5PSIxMC41NSIgc3R5bGU9ImZpbGw6IzFkMWUxYztvcGFjaXR5OjAuMiIvPjxlbGxpcHNlIGlkPSJfVHJhY8OpXzQiIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSZndDsiIGN4PSI0MS44MSIgY3k9IjI3OC45NSIgcng9IjQxLjgxIiByeT0iMTAuNTUiIHN0eWxlPSJmaWxsOiMxZDFlMWM7b3BhY2l0eTowLjIiLz48L2c+PGcgaWQ9Il9Hcm91cGVfMiIgZGF0YS1uYW1lPSImbHQ7R3JvdXBlJmd0OyI+PHBvbHlnb24gaWQ9Il9UcmFjw6lfNSIgZGF0YS1uYW1lPSImbHQ7VHJhY8OpJmd0OyIgcG9pbnRzPSIxNDEuNDYgMjQzLjI0IDEzMy44MiAyNDMuMjQgMTMzLjgyIDc1LjMyIDIwNy45MiAxMTUuMjIgMjA0LjMgMTIxLjk1IDE0MS40NiA4OC4xMSAxNDEuNDYgMjQzLjI0IiBzdHlsZT0iZmlsbDojMWQxZTFjIi8+PHBvbHlnb24gaWQ9Il9UcmFjw6lfNiIgZGF0YS1uYW1lPSImbHQ7VHJhY8OpJmd0OyIgcG9pbnRzPSI4My40MSAyNzYuNCA3NS44MyAyNzUuNDQgOTYuOTQgMTA4LjUxIDIwOSAxMjUuMzQgMjA3Ljg3IDEzMi45IDEwMy41NCAxMTcuMjMgODMuNDEgMjc2LjQiIHN0eWxlPSJmaWxsOiMxZDFlMWMiLz48cG9seWdvbiBpZD0iX1RyYWPDqV83IiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBwb2ludHM9IjE1NC40NyAyOTkuODUgMTUwLjg1IDE0OC42NSAyMDUuMDUgMTMyLjkyIDIwNy4xOCAxNDAuMjUgMTU4LjYyIDE1NC4zNCAxNjIuMSAyOTkuNjcgMTU0LjQ3IDI5OS44NSIgc3R5bGU9ImZpbGw6IzFkMWUxYyIvPjxwb2x5Z29uIGlkPSJfVHJhY8OpXzgiIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSZndDsiIHBvaW50cz0iMjE1IDIzNi40MyAxOTAuMDEgMTYxLjQ0IDIyNS4zMiAxNTMgMjI3LjEgMTYwLjQzIDE5OS44OSAxNjYuOTQgMjIyLjI1IDIzNC4wMSAyMTUgMjM2LjQzIiBzdHlsZT0iZmlsbDojMWQxZTFjIi8+PHBhdGggaWQ9Il9UcmFjw6lfOSIgZGF0YS1uYW1lPSImbHQ7VHJhY8OpJmd0OyIgZD0iTTIxNS41NywyMzUuNlMyMDguMjEsMjIzLDE5NywyMzFzLTQuNzIsMTkuMDktNC43MiwxOS4wOSwzLjY4LDMuNDQsMTYuMTYsMy44MiwxNS40NCwwLDE3Ljc4LTIuNjctNS4zLTIyLjctNS4zLTIyLjdaIiBzdHlsZT0iZmlsbDojMWQxZTFjIi8+PHBhdGggaWQ9Il9UcmFjw6lfMTAiIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSZndDsiIGQ9Ik03Mi4yOCwyNjMuMzlTNjAuNTEsMjQ1Ljg1LDQ0LjkxLDI1N3MtNi41NywyNi41Ny02LjU3LDI2LjU3LDUuMTEsMy43NywyMi40OCwzLjc5YzIyLjYxLDAsMjIuMTYtNi43NiwyMy43Ni0xMS40NCwyLjY3LTcuODYtNS42Mi0yMi4zNC01LjYyLTIyLjM0WiIgc3R5bGU9ImZpbGw6IzFkMWUxYyIvPjxwYXRoIGlkPSJfVHJhY8OpXzExIiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBkPSJNMTMyLjcyLDIzNS40M3MtMTUuNTktMjIuMTItMzEuMTktMTFTOTUsMjUxLDk1LDI1MXM1LjExLDMuNzcsMjIuNDgsMy43OWMyMi42MSwwLDIzLjY5LTQuNDcsMjUuMjgtOS4xNSwyLjY3LTcuODYtNy4xNS0yNC42My03LjE1LTI0LjYzWiIgc3R5bGU9ImZpbGw6IzFkMWUxYyIvPjxwYXRoIGlkPSJfVHJhY8OpXzEyIiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBkPSJNMTUzLjczLDI5NXMtMTQuMDYtMjEuMzUtMjkuNjctMTAuMi02LjU3LDI2LjU3LTYuNTcsMjYuNTcsNS4xMSw0LjUzLDIyLjQ4LDQuNTVjMjIuNjEsMCwyMi45MS03LjI2LDIzLTEyLjIxLjM5LTI0LjE2LTcuOTItMjIuMzQtNy45Mi0yMi4zNFoiIHN0eWxlPSJmaWxsOiMxZDFlMWMiLz48L2c+PGcgaWQ9Il9Hcm91cGVfMyIgZGF0YS1uYW1lPSImbHQ7R3JvdXBlJmd0OyI+PHBvbHlnb24gaWQ9Il9UcmFjw6lfMTMiIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSZndDsiIHBvaW50cz0iNDEyLjU1IDI0NC4yNiA0MjAuMTkgMjQ0LjI2IDQyMC4xOSA3Ni4zNCAzNDYuMDggMTE2LjI0IDM0OS43IDEyMi45NyA0MTIuNTUgODkuMTMgNDEyLjU1IDI0NC4yNiIgc3R5bGU9ImZpbGw6IzFkMWUxYyIvPjxwb2x5Z29uIGlkPSJfVHJhY8OpXzE0IiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBwb2ludHM9IjQ3MC42IDI3Ny40MiA0NzguMTggMjc2LjQ2IDQ1Ny4wNyAxMDkuNTMgMzQ1LjAxIDEyNi4zNiAzNDYuMTQgMTMzLjkxIDQ1MC40NyAxMTguMjQgNDcwLjYgMjc3LjQyIiBzdHlsZT0iZmlsbDojMWQxZTFjIi8+PHBvbHlnb24gaWQ9Il9UcmFjw6lfMTUiIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSZndDsiIHBvaW50cz0iMzk5LjU0IDMwMC44NyA0MDMuMTYgMTQ5LjY2IDM0OC45NiAxMzMuOTQgMzQ2LjgzIDE0MS4yNyAzOTUuMzggMTU1LjM2IDM5MS45IDMwMC42OSAzOTkuNTQgMzAwLjg3IiBzdHlsZT0iZmlsbDojMWQxZTFjIi8+PHBvbHlnb24gaWQ9Il9UcmFjw6lfMTYiIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSZndDsiIHBvaW50cz0iMzM5LjAxIDIzNy40NCAzNjQgMTYyLjQ2IDMyOC42OCAxNTQuMDIgMzI2LjkxIDE2MS40NSAzNTQuMTIgMTY3Ljk1IDMzMS43NiAyMzUuMDMgMzM5LjAxIDIzNy40NCIgc3R5bGU9ImZpbGw6IzFkMWUxYyIvPjxwYXRoIGlkPSJfVHJhY8OpXzE3IiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBkPSJNMzM4LjQ0LDIzNi42MlMzNDUuOCwyMjQsMzU3LDIzMnM0LjcyLDE5LjA5LDQuNzIsMTkuMDktMy42OCwzLjQ0LTE2LjE2LDMuODItMTUuNDQsMC0xNy43OC0yLjY3LDUuMy0yMi43LDUuMy0yMi43WiIgc3R5bGU9ImZpbGw6IzFkMWUxYyIvPjxwYXRoIGlkPSJfVHJhY8OpXzE4IiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBkPSJNNDgxLjczLDI2NC40UzQ5My41LDI0Ni44Nyw1MDkuMSwyNThzNi41NywyNi41Nyw2LjU3LDI2LjU3LTUuMTEsMy43Ny0yMi40OCwzLjc5Yy0yMi42MSwwLTIyLjE2LTYuNzYtMjMuNzYtMTEuNDQtMi42Ny03Ljg2LDUuNjItMjIuMzQsNS42Mi0yMi4zNFoiIHN0eWxlPSJmaWxsOiMxZDFlMWMiLz48cGF0aCBpZD0iX1RyYWPDqV8xOSIgZGF0YS1uYW1lPSImbHQ7VHJhY8OpJmd0OyIgZD0iTTQyMS4yOSwyMzYuNDRzMTUuNTktMjIuMTIsMzEuMTktMTFTNDU5LDI1Mi4wNSw0NTksMjUyLjA1cy01LjExLDMuNzctMjIuNDgsMy43OWMtMjIuNjEsMC0yMy42OS00LjQ3LTI1LjI4LTkuMTUtMi42Ny03Ljg2LDcuMTUtMjQuNjMsNy4xNS0yNC42M1oiIHN0eWxlPSJmaWxsOiMxZDFlMWMiLz48cGF0aCBpZD0iX1RyYWPDqV8yMCIgZGF0YS1uYW1lPSImbHQ7VHJhY8OpJmd0OyIgZD0iTTQwMC4yOCwyOTZzMTQuMDYtMjEuMzUsMjkuNjctMTAuMiw2LjU3LDI2LjU3LDYuNTcsMjYuNTctNS4xMSw0LjUzLTIyLjQ4LDQuNTVjLTIyLjYxLDAtMjIuOTEtNy4yNi0yMy0xMi4yMS0uMzktMjQuMTYsNy45Mi0yMi4zNCw3LjkyLTIyLjM0WiIgc3R5bGU9ImZpbGw6IzFkMWUxYyIvPjwvZz48ZyBpZD0iX0dyb3VwZV80IiBkYXRhLW5hbWU9IiZsdDtHcm91cGUmZ3Q7Ij48cGF0aCBpZD0iX1RyYWPDqV8yMSIgZGF0YS1uYW1lPSImbHQ7VHJhY8OpJmd0OyIgZD0iTTM2Mi4yMSwxMDQuNTVjMCw0Ni4xLTM2Ljc2LDcwLjQ5LTgyLjExLDcwLjQ5cy03OS44Mi0yNC4zOS03OS44Mi03MC40OSwzNC40Ny02Mi4wOSw3OS44Mi02Mi4wOVMzNjIuMjEsNTguNDUsMzYyLjIxLDEwNC41NVoiIHN0eWxlPSJmaWxsOiMzOGE5YjQiLz48cGF0aCBpZD0iX1RyYWPDqV90cmFuc3BhcmVudF8iIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSB0cmFuc3BhcmVudCZndDsiIGQ9Ik0yNzkuMSwxNzguODZjLTI0LDAtNDQuNTEtNi41MS01OS4zNS0xOC44NC0xNS44OS0xMy4xOS0yNC4yOC0zMi4zNy0yNC4yOC01NS40NywwLTQzLjEyLDI4LjkyLTY1LjkxLDgzLjYzLTY1LjkxQzMzNC41MSwzOC42NCwzNjUsNjIsMzY1LDEwNC41NWMwLDIzLTguODEsNDIuMjEtMjUuNDgsNTUuNTJDMzI0LjM2LDE3Mi4xOSwzMDIuOSwxNzguODYsMjc5LjEsMTc4Ljg2Wm0wLTEzMi41OGMtNTAuNDMsMC03NiwxOS42LTc2LDU4LjI3LDAsNDEuMTIsMjkuMTIsNjYuNjcsNzYsNjYuNjcsNDcuNTYsMCw3OC4yOS0yNi4xNyw3OC4yOS02Ni42N0MzNTcuMzksNTYuMzksMzE0LjgyLDQ2LjI4LDI3OS4xLDQ2LjI4WiIgc3R5bGU9ImZpbGw6IzFkMWUxYyIvPjwvZz48ZyBpZD0iX0dyb3VwZV81IiBkYXRhLW5hbWU9IiZsdDtHcm91cGUmZ3Q7Ij48ZWxsaXBzZSBpZD0iX1RyYWPDqV8yMiIgZGF0YS1uYW1lPSImbHQ7VHJhY8OpJmd0OyIgY3g9IjI0OS4xNyIgY3k9IjU1LjU5IiByeD0iNTEuMTciIHJ5PSI1Mi45MiIgc3R5bGU9ImZpbGw6I2ZmZiIvPjxwYXRoIGlkPSJfVHJhY8OpX3RyYW5zcGFyZW50XzIiIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSB0cmFuc3BhcmVudCZndDsiIGQ9Ik0yNDguMTcsMTExLjE5Yy0yOS42OSwwLTUzLjg1LTI0Ljk0LTUzLjg1LTU1LjU5UzIxOC40OCwwLDI0OC4xNywwLDMwMiwyNC45NCwzMDIsNTUuNTksMjc3Ljg2LDExMS4xOSwyNDguMTcsMTExLjE5Wm0wLTEwNS44NGMtMjYuNzQsMC00OC41LDIyLjU0LTQ4LjUsNTAuMjVzMjEuNzYsNTAuMjUsNDguNSw1MC4yNSw0OC41LTIyLjU0LDQ4LjUtNTAuMjVTMjc0LjkxLDUuMzUsMjQ4LjE3LDUuMzVaIiBzdHlsZT0iZmlsbDojMWQxZTFjIi8+PC9nPjxnIGlkPSJfR3JvdXBlXzYiIGRhdGEtbmFtZT0iJmx0O0dyb3VwZSZndDsiPjxlbGxpcHNlIGlkPSJfVHJhY8OpXzIzIiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBjeD0iMzI1LjYyIiBjeT0iNjQuMjMiIHJ4PSI0Mi4yMiIgcnk9IjQxLjQiIHN0eWxlPSJmaWxsOiNmZmYiLz48cGF0aCBpZD0iX1RyYWPDqV90cmFuc3BhcmVudF8zIiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kgdHJhbnNwYXJlbnQmZ3Q7IiBkPSJNMzI0LjYyLDEwOC4zMWMtMjQuNzUsMC00NC44OS0xOS43Ny00NC44OS00NC4wOHMyMC4xNC00NC4wOCw0NC44OS00NC4wOCw0NC44OSwxOS43Nyw0NC44OSw0NC4wOFMzNDkuMzcsMTA4LjMxLDMyNC42MiwxMDguMzFabTAtODIuODFjLTIxLjgsMC0zOS41NCwxNy4zNy0zOS41NCwzOC43M1MzMDIuODEsMTAzLDMyNC42MiwxMDNzMzkuNTQtMTcuMzcsMzkuNTQtMzguNzNTMzQ2LjQyLDI1LjUsMzI0LjYyLDI1LjVaIiBzdHlsZT0iZmlsbDojMWQxZTFjIi8+PC9nPjxjaXJjbGUgaWQ9Il9UcmFjw6lfMjQiIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSZndDsiIGN4PSIyNTIuNDgiIGN5PSI1OC4zOCIgcj0iMjMuNTciIHN0eWxlPSJmaWxsOiMxZDFlMWMiLz48Y2lyY2xlIGlkPSJfVHJhY8OpXzI1IiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBjeD0iMjY1LjEyIiBjeT0iNTQuOCIgcj0iNi41IiBzdHlsZT0iZmlsbDojZmZmIi8+PGVsbGlwc2UgaWQ9Il9UcmFjw6lfMjYiIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSZndDsiIGN4PSIzMjkiIGN5PSI2Ni42OCIgcng9IjE5LjEiIHJ5PSIxOC4zMyIgc3R5bGU9ImZpbGw6IzFkMWUxYyIvPjxjaXJjbGUgaWQ9Il9UcmFjw6lfMjciIGRhdGEtbmFtZT0iJmx0O1RyYWPDqSZndDsiIGN4PSIzMjUuMzEiIGN5PSI2My40MSIgcj0iNS4yNiIgc3R5bGU9ImZpbGw6I2ZmZiIvPjxnIGlkPSJfR3JvdXBlXzciIGRhdGEtbmFtZT0iJmx0O0dyb3VwZSZndDsiPjxlbGxpcHNlIGlkPSJfVHJhY8OpXzI4IiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBjeD0iMzY3LjYzIiBjeT0iMjUwLjEzIiByeD0iNDEuODEiIHJ5PSIxMC41NSIgc3R5bGU9ImZpbGw6IzFkMWUxYztvcGFjaXR5OjAuMiIvPjxlbGxpcHNlIGlkPSJfVHJhY8OpXzI5IiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBjeD0iNDU0LjEzIiBjeT0iMjQ3Ljg0IiByeD0iNDEuODEiIHJ5PSIxMC41NSIgc3R5bGU9ImZpbGw6IzFkMWUxYztvcGFjaXR5OjAuMiIvPjxlbGxpcHNlIGlkPSJfVHJhY8OpXzMwIiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBjeD0iNDMzLjU2IiBjeT0iMzEwLjA1IiByeD0iNDEuODEiIHJ5PSIxMC41NSIgc3R5bGU9ImZpbGw6IzFkMWUxYztvcGFjaXR5OjAuMiIvPjxlbGxpcHNlIGlkPSJfVHJhY8OpXzMxIiBkYXRhLW5hbWU9IiZsdDtUcmFjw6kmZ3Q7IiBjeD0iNTEyLjkzIiBjeT0iMjgwLjM1IiByeD0iNDEuODEiIHJ5PSIxMC41NSIgc3R5bGU9ImZpbGw6IzFkMWUxYztvcGFjaXR5OjAuMiIvPjwvZz48L2c+PC9zdmc+" title="Api Platform" alt="Api Platform" /></span>
                            <span><img src="https://nodejs.org//static/images/logos/nodejs-new-pantone-black.svg" title="Nodejs" alt="Nodejs" /></span>
                            <span><img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Expressjs.png" title="Express Js" alt="Express Js" /></span>
                        </div>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Mobile, Desktop</h3>
                    <div class="ab-cont-grid-card-body">
                        <div class="ab-cont-stack-list">
                            <span><img src="https://img.icons8.com/color/48/000000/react-native.png" title="React Native" alt="React Native" /></span>
                            <span><img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Electron_Software_Framework_Logo.svg" title="Electron JS" alt="Electron JS" /></span>
                        </div>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Data, Cloud</h3>
                    <div class="ab-cont-grid-card-body">
                        <div class="ab-cont-stack-list">
                            <span><img src="https://cdn.worldvectorlogo.com/logos/elasticsearch.svg" title="Elastic Search" alt="Elastic Search" /></span>
                            <span>Algolia</span>
                            <span><img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Amazon_Web_Services_Logo.svg" title="Amazon S3" alt="Amazon S3" /></span>
                            <span>MySQL</span>
                            <span>PostgreSQL</span>
                            <span>Redis</span>
                        </div>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— CMS</h3>
                    <div class="ab-cont-grid-card-body">
                        <div class="ab-cont-stack-list">
                            <span><img src="https://img.icons8.com/color/48/000000/wordpress.png" title="Wordpress" alt="Wordpress" /></span>
                            <span><img src="https://axeptio.imgix.net/2020/04/584815d1cef1014c0b5e4976.png?w=300?auto=format&fit=crop&w=170&h=auto&dpr=1" title="Prestashop" alt="Prestashop" /></span>
                        </div>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Dev Ops, Monitoring & Testings</h3>
                    <div class="ab-cont-grid-card-body">
                        <div class="ab-cont-stack-list">
                            <span><img src="https://img.icons8.com/color/48/000000/gitlab.png" title="Gitlab CI" alt="Gitlab CI" /></span>
                            <span><img src="https://upload.wikimedia.org/wikipedia/commons/4/46/Capistrano_logo.svg" title="Capistrano" alt="Capistrano" /></span>
                            <span><img src="https://img.icons8.com/color/48/000000/jenkins.png" title="Jenkins" alt="Jenkins" /></span>
                            <span><img src="https://img.icons8.com/fluent/48/000000/docker.png" title="Docker" alt="Docker" /></span>
                            <span><img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Selenium_Logo.png" title="Selenium" alt="Selenium" /></span>
                            <span><img src="https://seeklogo.com/images/J/jest-logo-F9901EBBF7-seeklogo.com.png" title="Jest" alt="Jest" /></span>
                            <span><img src="https://seeklogo.com/images/V/vagrant-logo-B214F47636-seeklogo.com.png" title="Vagrant" alt="Vagrant" /></span>
                            <span><img src="https://seeklogo.com/images/G/grafana-logo-15BA0AFA8A-seeklogo.com.png" title="Grafana" alt="Grafana" /></span>

                            <span><img src="https://cdn.opsmatters.com/sites/default/files/styles/thumbnail/public/logos/pm2-thumb.png?itok=GxWHu4mh" title="PM2" alt="PM2" /></span>
                        </div>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Development & Project tools</h3>
                    <div class="ab-cont-grid-card-body">
                        <div class="ab-cont-stack-list">
                            <span><img src="https://img.icons8.com/color/48/000000/git.png" title="Git" alt="Git" /></span>
                            <span><img src="https://e7.pngegg.com/pngimages/130/997/png-clipart-gulp-js-npm-computer-icons-javascript-sass-java-script-template-logo.png" title="Gulp" alt="Gulp" /></span>
                            <span><img src="https://raw.githubusercontent.com/webpack/media/master/logo/icon.png" title="Webpack" alt="Webpack" /></span>
                            <span><img src="https://img.icons8.com/color/48/000000/npm.png" title="NPM" alt="NPM" /></span>
                            <span><img src="https://img.icons8.com/color/48/000000/jira.png" title="Jira" alt="Jira" /></span>
                            <span><img src="https://img.icons8.com/color/48/000000/atlassian-confluence.png" title="Confluence" alt="Confluence" /></span>
                            <span><img src="https://img.icons8.com/color/48/000000/slack.png" title="Slack" alt="Slack" /></span>
                        </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Marketing tools</h3>
                    <div class="ab-cont-grid-card-body">
                        <div class="ab-cont-stack-list">
                            <span><img src="https://img.icons8.com/windows/32/000000/mailchimp.png" title="Mailchimp" alt="Mailchimp" /></span>
                            <span><img src="https://img.icons8.com/ios/50/000000/google-analytics-logo.png" title="Google Analytics" alt="Google Analytics" /></span>
                            <span>Typeform</span>
                            <span>Google Adsense</span>
                            <span>Google Adwords</span>
                            <span>Google Trends</span>
                            <span>Facebook Ads</span>
                            <span>Service Desk</span>
                        </div>
                </section>
            </div>
        </div>
    </section>

    <section id="wishes" class="about-cont-ss-sect jss-about-cont-ss-sect">
        <div class="about-cont-ss-sect-title-row jss-about-cont-ss-sect-title-row">
            <h2 class="about-cont-ss-sect-title">Job Preferences</h2>
            <button class="about-cont-ss-sect-title-visible-btn jss-about-cont-ss-sect-title-visible-btn hidden" app-type="visible">
                <img class="about-cont-ss-sect-title-visible-icon" src="https://img.icons8.com/material-outlined/24/000000/visible--v1.png" />
            </button>
            <button class="about-cont-ss-sect-title-visible-btn jss-about-cont-ss-sect-title-visible-btn" app-type="closed">
                <img class="about-cont-ss-sect-title-visible-icon" src="https://img.icons8.com/material-outlined/24/000000/closed-eye.png" />
            </button>
        </div>
        <div class="about-cont-ss-sect-body jss-about-cont-ss-sect-body hidden">
            <div class="ab-cont-grid-card-list">
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Role</h3>
                    <div class="ab-cont-grid-card-body">
                        <ul class="ab-cont-body-r-text-par">
                            <li>- <b>Product Manager</b></li>
                            <li>- <b>Delivery Manager</b></li>
                            <li>- <b>Coach Agile</b></li>
                        </ul>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Location</h3>
                    <div class="ab-cont-grid-card-body">
                        <ul class="ab-cont-body-r-text-par">
                            <li>- <b>Ile-De-France, France</b></li>
                            <li>- <b>London, United Kingdom</b></li>
                        </ul>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Remote</h3>
                    <div class="ab-cont-grid-card-body">
                        <ul class="ab-cont-body-r-text-par">
                            <li>- <b>Would be largely appreciated</b></li>
                        </ul>
                    </div>
                </section>
                <section class="ab-cont-grid-card">
                    <h3 class="ab-cont-grid-card-title">— Availability</h3>
                    <div class="ab-cont-grid-card-body">
                        <ul class="ab-cont-body-r-text-par">
                            <li>>> 💎 <?= __("<b>4 weeks</b>") ?> 💎 << </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>