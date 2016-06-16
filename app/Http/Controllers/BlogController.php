<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

class BlogController extends Controller {

    public function index() {
        $posts = [
            0 => '<article class="blog">
                    <div class="date"><time datetime="2016-02-17T14:17:56-02:00">Wednesday, February 17, 2016</time></div>
                    <header>
                        <h2><a href="/16/a-day-with-laravel51">A day with Laravel 5.1</a></h2>
                    </header>

                    <img src="/images/beach.jpg" />
                    <div class="snippet">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id</p>
                        <p class="continue"><a href="/16/a-day-with-laravel51">Continue reading...</a></p>
                    </div>

                    <footer class="meta">
                        <p>Comments: <a href="/16/a-day-with-laravel5.1#comments">10</a></p>
                        <p>Posted by <span class="highlight">dsyph3r</span> at 02:17PM</p>
                        <p>Tags: <span class="highlight">laravel51, php, paradise, symblog</span></p>
                    </footer>
                </article>',
            1 => '<article class="blog">
                    <div class="date"><time datetime="2011-07-23T06:12:33-03:00">Saturday, July 23, 2011</time></div>
                    <header>
                        <h2><a href="/17/the-pool-on-the-roof-must-have-a-leak">The pool on the roof must have a leak</a></h2>
                    </header>

                    <img src="/images/pool_leak.jpg" />
                    <div class="snippet">
                        <p>Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.</p>
                        <p class="continue"><a href="/17/the-pool-on-the-roof-must-have-a-leak">Continue reading...</a></p>
                    </div>

                    <footer class="meta">
                        <p>Comments: <a href="/17/the-pool-on-the-roof-must-have-a-leak#comments">10</a></p>
                        <p>Posted by <span class="highlight">Zero Cool</span> at 06:12AM</p>
                        <p>Tags: <span class="highlight">pool, leaky, hacked, movie, hacking, symblog</span></p>
                    </footer>
                  </article>'
        ];

        return view('blog.index', compact('posts'));
    }

}
