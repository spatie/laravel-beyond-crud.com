@extends('front.layouts.master', ['inversNav' => true])

@section('title', 'Working with data (Sample)')

@section('description', 'Sample from "Laravel beyond CRUD": building larger-than-average web applications by Brent Roose. An ebook and premium video course by Spatie.')

@section('content')

<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        text-indent: 0;
    }

    .s1 {
        color: #007a9a;
        font-family: Jost, serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
    }

    .s2 {
        color: #007a9a;
        font-family: Jost, serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        vertical-align: 1pt;
    }

    h3 {
        font-family: Jost, serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
    }

    .s3 {
        color: #007a9a;
        font-family: Jost, serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
    }

    h1 {
        font-family: Jost, serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 2rem;
    }

    h2 {
        color: #f9f5f4;
        font-family: Jost, serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
    }

    .s4 {
        color: #f9f5f4;
        font-family: Jost, serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
    }

    .s5 {
        color: #0e0e0e;
        font-family: Jost, serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
    }

    .p,
    p {
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        margin: 0pt;
    }

    h4 {
        font-family: Jost, serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 1.2rem;
        margin-top: 2rem;
    }

    .s6 {
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-family: monospace;
    }

    .s7 {
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
    }

    .s8 {
        color: #0e0e0e;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
    }

    .s10 {
        color: #757575;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
    }

    .s11 {
        color: #346df1;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
    }

    .s12 {
        color: #2d9b42;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
    }

    .s14 {
        color: #009083;
        font-family: Jost, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        border-left: 8px solid #009083;
        padding-left: 1.5rem;
        font-size: 1.2rem;
        margin: 1.25rem 0;
    }

    .s15 {
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
    }

    li {
        display: block;
    }

    #l1 {
        padding-left: 0pt;
    }

    #l1>li>*:first-child:before {
        content: "• ";
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
    }

    .code {
        background-color: #F5FAFB;
        margin: 2rem 0;
        padding: 1rem;
        font-family: monospace;
        font-size: .85rem;
        line-height: 1.65;
    }

</style>

<div class="mt-16 mx-auto max-w-4xl">

    @include('partials.newsletter-feedback')

    <header class="z-20 sticky top-0 overflow-hidden pb-8">
        <div class="px-8 bg-red-100 shadow-nav">
            <div class="max-w-2xl mx-auto h-24 flex items-center justify-between">
                <a href="/" class="flex items-center uppercase text-sm font-display font-semibold tracking-wider leading-none">
                    &larr; Home
                </a>
                <a href="https://spatie.be/products/laravel-beyond-crud">
                    <button class="px-3 h-8 bg-gray-300 hover:bg-gray-400 text-gray-800 uppercase text-sm font-display font-bold tracking-wider leading-none">
                        Buy course
                    </button>
                </a>
            </div>
        </div>
    </header>

    <main class="bg-white">
        <div class="pt-8 pb-16 -mt-48">
            <div class="absolute w-full top-0 right-0 bg-yellow-500 py-6 font-display font-bold text-center uppercase">Sample chapter</div>
        </div>

        <section class="my-16 py-16">
            <div class="px-8">
                <div class="max-w-2xl mx-auto">
                    <p>
                    …
                    </p>
                    <h1 style="padding-top: 15pt;">
                        Working with data
                    </h1>
                    <p><br /></p>
                    <p style="padding-top: 20pt;">
                        I like to think of that simple idea of grouping code in domains -
                        which I explained in the previous chapter - as a conceptual
                        foundation we can use to build upon. You&#39;ll notice that
                        throughout the first part of this book, this core idea will return
                        again and again.
                    </p>
                    <p><br /></p>
                    <p>
                        The very first building block we&#39;ll be laying upon this
                        foundation, is once again so simple in its core, yet so powerful:
                        we&#39;re going to model data in a structured way; we&#39;re going
                        to make data a first-class citizen of our codebase.
                    </p>
                    <p><br /></p>
                    <p>
                        You probably noticed the importance of data modelling at the start
                        of almost every project you do: you don&#39;t start building
                        controllers and jobs, you start by building, what Laravel calls,
                        models. Large projects benefit from making ERDs and other kinds of
                        diagrams to conceptualise what data will be handled by the
                        application. Only when that&#39;s clear, you can start building the
                        entry points and hooks that work with your data.
                    </p>
                    <p><br /></p>
                    <p>
                        The goal of this chapter is to teach you the importance of that data
                        flow. We&#39;re not even going to talk about models. Instead,
                        we&#39;re going to look at simple plain data to start with, and the
                        goal is that all developers in your team can write code that
                        interacts with this data in a predictable and safe way.
                    </p>
                    <p><br /></p>
                    <p>
                        To really appreciate all the benefits we&#39;ll get from applying a
                        simple data- oriented pattern, we&#39;ll need to dive into PHP&#39;s
                        type system first.
                    </p>
                    <p><br /></p>
                    <h4>
                        Type theory
                    </h4>
                    <p><br /></p>
                    <p>
                        Not everyone agrees on the vocabulary used when talking about type
                        systems. So let&#39;s clarify a few terms in the way that I will use
                        them here.
                    </p>
                    <p><br /></p>
                    <p>
                        <span class="p">The strength of a type system - strong or weak types - defines
                            whether a variable can change its type after it was defined. A
                            simple example: given a string variable </span><span class="s6" style=" background-color: #F5FAFB;">$a = &#39;test&#39;</span><span class="s7">; </span><span class="p">a weak type system allows you to re-assign that variable to
                            another type, for example </span><span class="s6" style=" background-color: #F5FAFB;">$a = 1</span><span class="s7">, an integer.</span>
                    </p>
                    <p><br /></p>
                    <p>
                        PHP is a weakly typed language. Let&#39;s look at what that means in
                        practice.
                    </p>

                    <div class=code>
                        <p class="s8" style="padding-left: 8pt;">
                            $id = <span style=" color: #1A1A1A;">&#39;1&#39;</span>;
                            <span style=" color: #757575;">// E.g. an id retrieved from the URL</span>
                        </p>
                        <p><br /></p>
                        <p class="s8" style="padding-left: 8pt;">
                            <span style=" color: #346DF1;">function </span><span style=" color: #2D9B42;">find</span>(<span style=" color: #E22C28;">int </span>$id): <span style=" color: #E22C28;">Model</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            {
                        </p>
                        <p class="s10" style="padding-top: 2pt;padding-left: 27pt;">
                            // The input &#39;1&#39; will automatically be cast to an int
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            }
                        </p>
                        <p><br /></p>
                        <p class="s12" style="padding-left: 8pt;">
                            find<span style=" color: #0E0E0E;">($id);</span>
                        </p>
                    </div>

                    <p style="padding-top: 8pt;">
                        To be clear: it makes sense for PHP to have a weak type system.
                        Being a language that mainly works with a HTTP request, everything
                        is basically a string.
                    </p>
                    <p><br /></p>
                    <p>
                        You might think that in modern PHP, you can avoid this
                        behind-the-scenes type switching - type juggling - by using the
                        strict types feature, but that&#39;s not completely true. Declaring
                        strict types prevents other types being passed into a function, but you can still change the value of the variable
                        in the function itself.
                    </p>
                    <div class=code>
                        <p class="s8" style="padding-left: 8pt;">
                            <span style=" color: #346DF1;">declare</span>(<span style=" color: #2D9B42;">strict_types</span>=<span style=" color: #1A1A1A;">1</span>);
                        </p>
                        <p><br /></p>
                        <p class="s8" style="padding-left: 8pt;">
                            <span style=" color: #346DF1;">function </span><span style=" color: #2D9B42;">find</span>(<span style=" color: #E22C28;">int </span>$id): <span style=" color: #E22C28;">Model</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            {
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 27pt;">
                            $id = <span style=" color: #1A1A1A;">&#39;&#39; </span>. $id;
                        </p>
                        <p><br /></p>
                        <p class="s10" style="padding-left: 27pt;">
                            /*
                        </p>
                        <p class="s10" style="padding-top: 2pt;padding-left: 32pt;">
                            * This is perfectly allowed in PHP
                        </p>
                        <p class="s10" style="padding-top: 2pt;padding-left: 32pt;">
                            * &#39;$id&#39; is a string now.
                        </p>
                        <p class="s10" style="padding-top: 2pt;padding-left: 32pt;">
                            */
                        </p>
                        <p><br /></p>
                        <p class="s10" style="padding-left: 27pt;">
                            // …
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            }
                        </p>
                        <br/>
                        <p class="s8" style="padding-left: 8pt;">
                            <span style=" color: #2D9B42;">find</span>(<span style=" color: #1A1A1A;">&#39;1&#39;</span>);
                            <span style=" color: #757575;">// This would trigger a TypeError. </span>
                        </p>
                        <p><br /></p>
                        <p style="padding-left: 8pt;">
                            <span style=" color: #2D9B42;">find</span>(<span style=" color: #1A1A1A;">1</span>); <span style=" color: #757575;">// This would be fine.</span>
                        </p>
                    </div>

                    <p>
                        Even with strict types and type hints, PHP&#39;s type system is
                        weak. Type hints only ensure a variable&#39;s type at that point in
                        time, without a guarantee about any future value that variable might
                        have.
                    </p>
                    <p><br /></p>
                    <p>
                        Like I said before: it makes sense for PHP to have a weak type
                        system, since all input it has to deal with starts out as a string.
                        There is an interesting property to strong types though: they come
                        with a few guarantees. If a variable has a type that&#39;s
                        unchangeable, a whole range of unexpected behaviour simply cannot
                        happen anymore.
                    </p>
                    <p><br /></p>
                    <p>
                        You see, it&#39;s mathematically provable that if a strongly typed
                        program compiles, it&#39;s impossible for that program to have a
                        range of bugs which would be able to exist in weakly typed
                        languages. In other words, strong types give the programmer a better insurance that the code actually
                        behaves how it&#39;s supposed to.
                    </p>
                    <p><br /></p>
                    <p>
                        As a sidenote: this doesn&#39;t mean that a strongly typed language
                        cannot have bugs! You&#39;re perfectly able to write a buggy
                        implementation. But when a strongly typed program compiles
                        successfully, you&#39;re sure a certain set of type-related bugs and
                        errors can&#39;t occur in that program.
                    </p>
                    <p><br /></p>
                    <p class="s14">
                        Strong type systems allow developers to have much more insight into
                        the program when writing the code, instead of having to run it.
                    </p>
                    <p><br /></p>
                    <p>
                        There&#39;s one more concept we need to look at: static and dynamic
                        type systems - and this is where things start to get interesting.
                    </p>
                    <p><br /></p>
                    <p>
                        <span class="p">As you&#39;re probably aware, PHP is an interpreted language
                            which means that a PHP script is translated to machine code at
                            runtime. When you send a request to a server running PHP, it
                            will take those plain </span><span class="s6" style=" background-color: #F5FAFB;">.php</span><span class="s15"> </span><span class="p">files, and parse that text into something the processor can
                            execute.</span>
                    </p>
                    <p><br /></p>
                    <p>
                        Again, this is one of PHP&#39;s strengths: the simplicity of writing
                        a script, refreshing the page, and everything is there. That&#39;s a
                        big difference compared to a language that has to be compiled before
                        it can be run.
                    </p>
                    <p><br /></p>
                    <p>
                        Obviously there are caching mechanisms which optimise this, so the
                        above statement is an oversimplification but it&#39;s good enough to
                        get to the next point though.
                    </p>
                    <p><br /></p>
                    <p>
                        That point is that, once again, there is a downside to PHP&#39;s
                        approach: since it only checks its types at runtime, there might be
                        type errors that crash the program, while running. You might have a
                        clear error to debug, but still the program has crashed.
                    </p>
                    <p><br /></p>
                    <p>
                        This type checking at runtime makes PHP a dynamically typed
                        language. A statically typed language on the other hand will have
                        all its type checks done before the code is executed, usually during
                        compile time.
                    </p>
                    <p><br /></p>
                    <p>
                        As of PHP 7.0, its type system has been improved quite a lot. So
                        much so that tools like PHPStan, Phan and Psalm started to become
                        very popular lately.
                    </p>
                    <p>
                        These tools take the dynamic language that is PHP, but run a bunch
                        of statical analyses on your code.
                    </p>
                    <p><br /></p>
                    <p>
                        These opt-in libraries can offer quite a lot of insight into your
                        code, without ever having to run it or run unit tests. What&#39;s
                        more, an IDE like PhpStorm also has many of these static checks
                        built-in.
                    </p>
                    <p><br /></p>
                    <p>
                        With all this background information in mind, it&#39;s time to
                        return to the core of our application: data.
                    </p>
                    <p><br /></p>
                    <h4>
                        Structuring unstructured data
                    </h4>
                    <p><br /></p>
                    <p>
                        Have you ever had to work with an &quot;array of stuff&quot; that
                        was actually more than just a list? Did you use the array keys as
                        fields? And did you feel the pain of not knowing exactly what was in
                        that array? How about not being sure whether the data in it is
                        actually what you expect it to be, or what fields are available?
                    </p>
                    <p><br /></p>
                    <p>
                        Let&#39;s visualise what I&#39;m talking about: working with
                        Laravel&#39;s requests. Think of this example as a basic CRUD
                        operation to update an existing customer.
                    </p>
                    <div class="code">
                        <p class="s8" style="padding-left: 8pt;">
                            <span style=" color: #346DF1;">function </span><span style=" color: #2D9B42;">store</span>(<span style=" color: #E22C28;">CustomerRequest </span>$request, <span style=" color: #E22C28;">Customer </span>$customer)
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            {
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 27pt;">
                            $validated = $request-&gt;<span style=" color: #2D9B42;">validated</span>();
                        </p>
                        <p><br /></p>
                        <p class="s8" style="padding-left: 27pt;">
                            $customer-&gt;<span style=" color: #2D9B42;">name </span>=
                            $validated[<span style=" color: #1A1A1A;">&#39;name&#39;</span>];
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 27pt;">
                            $customer-&gt;<span style=" color: #2D9B42;">email </span>=
                            $validated[<span style=" color: #1A1A1A;">&#39;email&#39;</span>];
                        </p>
                        <p><br /></p>
                        <p class="s10" style="padding-left: 27pt;">
                            // …
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            }
                        </p>
                    </div>
                    <p>
                        <span class="p">You might already see the problem arising: we don&#39;t know
                            exactly what data is available in the </span><span class="s6" style=" background-color: #F5FAFB;">$validated</span><span class="s15"> </span><span class="p">array. While arrays in PHP are a versatile and powerful data
                            structure, as soon as they are used to represent something other
                            than &quot;a list of things&quot;, there are better ways to
                            solve your problem.</span>
                    </p>
                    <p><br /></p>
                    <p>
                        Before looking at solutions, here&#39;s what you could do to deal
                        with this situation:
                    </p>
                    <p><br /></p>
                    <ul id="l1">
                        <li>
                            <p style="padding-left: 37pt;text-indent: -11pt;">
                                Read the source code
                            </p>
                        </li>
                        <li>
                            <p style="padding-left: 37pt;text-indent: -11pt;">
                                Read the documentation
                            </p>
                        </li>
                        <li>
                            <p style="padding-left: 37pt;text-indent: -11pt;">
                                <span class="p">Dump </span><span class="s6" style=" background-color: #F5FAFB;">$validated</span><span class="s15"> </span><span class="p">to inspect it</span>
                            </p>
                        </li>
                        <li>
                            <p style="padding-left: 37pt;text-indent: -11pt;">
                                Or use a debugger to inspect it
                            </p>
                        </li>
                    </ul>
                    <p><br /></p>
                    <p>
                        Now imagine for a minute that you&#39;re working with a team of
                        several developers on this project, and that one of your colleagues
                        has written this piece of code five months ago. I can guarantee you
                        that you will not know what data you&#39;re working with, without
                        doing any of the cumbersome things listed above.
                    </p>
                    <p><br /></p>
                    <p>
                        It turns out that strongly typed systems in combination with static
                        analysis can be a great help in understanding what exactly we&#39;re
                        dealing with.
                    </p>
                    <p>
                        Languages like Rust, for example, solve this problem cleanly:
                    </p>
                    <div class="code">
                        <p class="s8" style="padding-left: 27pt;text-indent: -19pt;">
                            <span style=" color: #346DF1;">struct </span><span style=" color: #E22C28;">CustomerData </span>{ <br>
                            <span style=" color: #2D9B42;">name</span>:
                            <span style=" color: #E22C28;">String</span>,
                            <br>
                            <span style=" color: #2D9B42;">email</span>:
                            <span style=" color: #E22C28;">String</span>,
                            <br>
                            <span style=" color: #2D9B42;">birth_date</span>:
                            <span style=" color: #E22C28;">Date</span>,
                        </p>
                        <p class="s8" style="padding-left: 8pt;">
                            }
                        </p>
                    </div>
                    <p>
                        Actually, a struct is exactly what we need but unfortunately PHP
                        doesn&#39;t have structs; it has arrays and objects, and that&#39;s
                        it.
                    </p>
                    <p><br /></p>
                    <p>
                        However. objects and classes might be enough.
                    </p>

                    <div class="code">
                        <p class="s11" style="padding-left: 8pt;">
                            class <span style=" color: #E22C28;">CustomerData</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            {
                        </p>
                        <p class="s11" style="padding-top: 2pt;padding-left: 27pt;">
                            public <span style=" color: #E22C28;">string </span><span style=" color: #2D9B42;">$name</span>

                            <span style=" color: #0E0E0E;">; <br></span>public
                            <span style=" color: #E22C28;">string </span><span style=" color: #2D9B42;">$email</span><span style=" color: #0E0E0E;">; </span>
                            <br>
                            public
                            <span style=" color: #E22C28;">Carbon </span><span style=" color: #2D9B42;">$birth_date</span><span style=" color: #0E0E0E;">;</span>
                        </p>
                        <p class="s8" style="padding-left: 8pt;">
                            }
                        </p>
                    </div>
                    <p>
                        It&#39;s a little more verbose, but it basically does the same
                        thing. This simple object could be used like so.
                    </p>
                    <div class="code">
                        <p class="s8" style="padding-left: 8pt;">
                            <span style=" color: #346DF1;">function </span><span style=" color: #2D9B42;">store</span>(<span style=" color: #E22C28;">CustomerRequest </span>$request, <span style=" color: #E22C28;">Customer </span>$customer)
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            {
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 27pt;">
                            $validated =
                            <span style=" color: #E22C28;">CustomerData</span>::<span style=" color: #2D9B42;">fromRequest</span>($request);
                        </p>
                        <p><br /></p>
                        <p class="s8" style="padding-left: 27pt;">
                            $customer-&gt;<span style=" color: #2D9B42;">name </span>=
                            $validated-&gt;<span style=" color: #2D9B42;">name</span>;
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 27pt;">
                            $customer-&gt;<span style=" color: #2D9B42;">email </span>=
                            $validated-&gt;<span style=" color: #2D9B42;">email</span>;
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 27pt;">
                            $customer-&gt;<span style=" color: #2D9B42;">birth_date </span>=
                            $validated-&gt;<span style=" color: #2D9B42;">birth_date</span>;
                        </p>
                        <p><br /></p>
                        <p class="s10" style="padding-left: 27pt;">
                            // …
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            }
                        </p>
                    </div>
                    <p>
                        The static analyser built into your IDE would always be able to tell
                        us what data we&#39;re dealing with.
                    </p>
                    <p><br /></p>
                    <p>
                        This pattern of wrapping unstructured data in types, so that we can
                        use that data in a reliable way, is called
                        <i>“data transfer objects”</i>. It&#39;s the first concrete pattern
                        I highly recommend you to use in your larger-than-average Laravel
                        projects.
                    </p>
                    <p><br /></p>
                    <p>
                        When discussing this book with your colleagues, friends or within
                        the Laravel community, you might stumble upon people who don&#39;t
                        share the same vision about strong type systems. There are in fact
                        lots of people who prefer to embrace the dynamic/weak side of PHP,
                        and there&#39;s definitely something to say for that.
                    </p>
                    <p><br /></p>
                    <p>
                        In my experience though, there are more advantages to the strongly
                        typed approach when working with a team of several developers on a
                        project for serious amounts of time. You have to take every
                        opportunity you can to reduce cognitive load. You don&#39;t want
                        developers having to start debugging their code every time they want
                        to know what exactly is in a variable. The information has to be
                        right there at hand, so that developers can focus on what&#39;s
                        important: building the application.
                    </p>
                    <p><br /></p>
                    <p>
                        Of course, using DTOs comes with a price: there is not only the
                        overhead of defining these classes; you also need to map, for
                        example, request data onto a DTO. But the benefits of using DTOs
                        definitely outweigh this added cost: whatever time you lose
                        initially writing this code, you make up for in the long run.
                    </p>
                    <p><br /></p>
                    <p>
                        The question about constructing DTOs from <i>“external” </i>data is
                        one that still needs answering though.
                    </p>
                    <p><br /></p>
                    <h4>
                        DTO factories
                    </h4>
                    <p><br /></p>
                    <p>
                        I will share two possible ways to construct DTOs, and also explain
                        which one is my personal preference.
                    </p>
                    <p><br /></p>
                    <p>
                        The first one is the most correct one: using a dedicated factory.
                    </p>
                    <div class="code">
                        <p class="s11" style="padding-left: 8pt;">
                            class <span style=" color: #E22C28;">CustomerDataFactory</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            {
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 42pt;text-indent: -14pt;">
                            <span style=" color: #346DF1;">public function </span><span style=" color: #2D9B42;">fromRequest</span>(
                                <br>
                            <span style=" color: #E22C28;">CustomerRequest </span>$request
                        </p>
                        <p class="s8" style="padding-left: 27pt;">
                            ): <span style=" color: #E22C28;">CustomerData </span>{
                        </p>
                        <p class="s11" style="padding-top: 2pt;padding-left: 47pt;">
                            return new <span style=" color: #E22C28;">CustomerData</span><span style=" color: #0E0E0E;">([</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 66pt;">
                            <span style=" color: #1A1A1A;">&#39;name&#39; </span>=&gt;
                            $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;name&#39;</span>),
                            <br>
                            <span style=" color: #1A1A1A;">&#39;email&#39; </span>=&gt;
                            $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;email&#39;</span>),
                            <br>
                            <span style=" color: #1A1A1A;">&#39;birth_date&#39; </span>=&gt;
                            <span style=" color: #E22C28;">Carbon</span>::make(
                        </p>
                        <p class="s8" style="padding-left: 85pt;">
                            $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;birth_date&#39;</span>)
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 66pt;">
                            ),
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 47pt;">
                            ]);
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 27pt;">
                            }
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            }
                        </p>
                    </div>
                    <p>
                        Having a separated factory keeps your code clean throughout the
                        project. I would say it makes most sense for this factory to live in
                        the application layer, since it has to know about specific requests
                        and other kinds of user input.
                    </p>
                    <p><br /></p>
                    <p>
                        <span class="p">While being the correct solution, did you notice I used a
                            shorthand in a previous example? That&#39;s right; on the DTO
                            class itself: </span><span class="s6" style=" background-color: #F5FAFB;">CustomerData::fromRequest()</span><span class="s7">.</span>
                    </p>
                    <p><br /></p>
                    <p>
                        <span class="p">What&#39;s wrong with this approach? Well for one, it adds
                            application-specific logic in the domain. The DTO class, living
                            in the domain, now has to know about the </span><span class="s6" style=" background-color: #F5FAFB;">CustomerRequest</span><span class="s15"> </span><span class="p">class, which lives in the application layer.</span>
                    </p>
                    <div class="code">
                        <p class="s11" style="padding-left: 8pt;">
                            use
                            <span style=" color: #E22C28;">Spatie\DataTransferObject\DataTransferObject</span><span style=" color: #0E0E0E;">;</span>
                        </p>
                        <p><br /></p>
                        <p class="s11" style="padding-left: 8pt;">
                            class <span style=" color: #E22C28;">CustomerData </span>extends
                            <span style=" color: #E22C28;">DataTransferObject</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            {
                        </p>
                        <p class="s10" style="padding-top: 2pt;padding-left: 27pt;">
                            // …
                        </p>
                        <p><br /></p>
                        <p class="s8" style="padding-left: 47pt;text-indent: -19pt;">
                            <span style=" color: #346DF1;">public static function </span><span style=" color: #2D9B42;">fromRequest</span>(
                            <br>
                            <span style=" color: #E22C28;">CustomerRequest </span>$request
                        </p>
                        <p class="s8" style="padding-left: 27pt;">
                            ): <span style=" color: #E22C28;">self </span>{
                        </p>
                        <p class="s11" style="padding-top: 2pt;padding-left: 47pt;">
                            return new <span style=" color: #E22C28;">self</span><span style=" color: #0E0E0E;">([</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 66pt;">
                            <span style=" color: #1A1A1A;">&#39;name&#39; </span>=&gt;
                            $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;name&#39;</span>),
                            <br>
                            <span style=" color: #1A1A1A;">&#39;email&#39; </span>=&gt;
                            $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;email&#39;</span>),
                            <br>
                            <span style=" color: #1A1A1A;">&#39;birth_date&#39; </span>=&gt;
                            <span style=" color: #E22C28;">Carbon</span>::make(
                        </p>
                        <p class="s8" style="padding-left: 85pt;">
                            $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;birth_date&#39;</span>)
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 66pt;">
                            ),
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 47pt;">
                            ]);
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 27pt;">
                            }
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            }
                        </p>
                    </div>
                    <p>
                        Obviously, mixing application-specific code within the domain
                        isn&#39;t the best of ideas. However, it is my preference.
                        There&#39;s two reasons for that.
                    </p>
                    <p><br /></p>
                    <p>
                        First of all, we already established that DTOs are the entry point
                        for data into the codebase. As soon as we&#39;re working with data
                        from the outside, we want to convert it to a DTO. We need to do this
                        mapping <i>somewhere</i>, so we might as well do it within the class
                        that it&#39;s meant for.
                    </p>
                    <p><br /></p>
                    <p>
                        Secondly, and this is the more important reason; I prefer this
                        approach because of one of PHP&#39;s own limitations: it doesn&#39;t
                        support named parameters - yet.
                    </p>
                    <p><br /></p>
                    <p>
                        See, you don&#39;t want your DTOs to end up having a constructor
                        with an individual parameter for each property: this doesn&#39;t
                        scale, and is very confusing when working with nullable or
                        default-value properties. That&#39;s why I prefer the approach of
                        passing an array to the DTO, and have it construct itself based on
                        the data in that array. As an aside: we use our
                        <span class="s6" style=" background-color: #F5FAFB;">spatie/data-transfer-object</span><span class="s15"> </span><span class="p">package to do exactly this.</span>
                    </p>
                    <p><br /></p>
                    <p>
                        Because named parameters aren&#39;t supported, there&#39;s also no
                        static analysis available, meaning you&#39;re in the dark about what
                        data is needed whenever you&#39;re constructing a DTO. I prefer to
                        keep this &quot;being in the dark&quot; within the DTO class, so
                        that it can be used without an extra thought from the outside.
                    </p>
                    <p><br /></p>
                    <p>
                        If PHP were to support something like named parameters though, which
                        it will in PHP 8, I would say the factory pattern is the way to go:
                    </p>
                    <div class="code">
                        <p class="s8" style="padding-left: 27pt;text-indent: -19pt;">
                            <span style=" color: #346DF1;">public function </span><span style=" color: #2D9B42;">fromRequest</span>(
                            <br>
                            <span style=" color: #E22C28;">CustomerRequest </span>$request
                        </p>
                        <p class="s8" style="padding-left: 8pt;">
                            ): <span style=" color: #E22C28;">CustomerData </span>{
                        </p>
                        <p class="s11" style="padding-top: 2pt;padding-left: 27pt;">
                            return new <span style=" color: #E22C28;">CustomerData</span><span style=" color: #0E0E0E;">(</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 47pt;">
                            <span style=" color: #2D9B42;">name</span>: $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;name&#39;</span>),
                            <br>
                            <span style=" color: #2D9B42;">email</span>: $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;email&#39;</span>),
                            <br>
                            <span style=" color: #2D9B42;">birth_date</span>:
                            <span style=" color: #E22C28;">Carbon</span>::make(
                        </p>
                        <p class="s8" style="padding-left: 66pt;">
                            $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;birth_date&#39;</span>)
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 47pt;">
                            ),
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 27pt;">
                            );
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            }
                        </p>
                    </div>
                    <p>
                        Until PHP supports this, I would choose the pragmatic solution over
                        the theoretically correct one. It&#39;s up to you though. Feel free
                        to choose what fits your team best.
                    </p>
                    <p><br /></p>
                    <h4>
                        An alternative to typed properties
                    </h4>
                    <p><br /></p>
                    <p>
                        There is an alternative to using typed properties: DocBlocks. Our
                        DTO package I mentioned earlier also supports them.
                    </p>
                    <div class="code">
                        <p class="s11" style="padding-left: 8pt;">
                            use
                            <span style=" color: #E22C28;">Spatie\DataTransferObject\DataTransferObject</span><span style=" color: #0E0E0E;">;</span>
                        </p>
                        <p><br /></p>
                        <p class="s11" style="padding-left: 8pt;">
                            class <span style=" color: #E22C28;">CustomerData </span>extends
                            <span style=" color: #E22C28;">DataTransferObject</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            {
                        </p>
                        <p class="s10" style="padding-top: 2pt;padding-left: 27pt;">
                            /** <span style=" color: #1A1A1A;">@var </span>string */
                            <br>
                            <span style=" color: #346DF1;">public </span><span style=" color: #2D9B42;">$name</span><span style=" color: #0E0E0E;">;</span>
                        </p>
                        <p><br /></p>
                        <p class="s10" style="padding-left: 27pt;">
                            /** <span style=" color: #1A1A1A;">@var </span>string */
                            <br>
                            <span style=" color: #346DF1;">public </span><span style=" color: #2D9B42;">$email</span><span style=" color: #0E0E0E;">;</span>
                        </p>
                        <p><br /></p>
                        <p class="s10" style="padding-left: 27pt;">
                            /** <span style=" color: #1A1A1A;">@var </span>\Carbon\Carbon */
                            <br>
                            <span style=" color: #346DF1;">public </span><span style=" color: #2D9B42;">$birth_date</span><span style=" color: #0E0E0E;">;</span>
                        </p>
                        <p class="s8" style="padding-left: 8pt;">
                            }
                        </p>
                    </div>
                    <p>
                        <span class="p">In some cases, DocBlocks offer advantages: they support </span><span class="s6" style=" background-color: #F5FAFB;">array of</span><span class="s15"> </span><span class="p">types and generics. But by default though, DocBlocks don&#39;t
                            give any guarantees that the data is of the type they say it is.
                            Luckily PHP has its reflection API, and with it, a lot more is
                            possible.</span>
                    </p>
                    <p><br /></p>
                    <p>
                        The solution provided by this package can be thought of as an
                        extension of PHP&#39;s type system. While there&#39;s only so much
                        one can do in userland and at runtime, still it adds value. If
                        you&#39;re unable to use PHP 7.4 and want a little more certainty
                        that your DocBlock types are actually respected, this package has
                        you covered.
                    </p>
                    <p><br /></p>
                    <h4>
                        A note on DTO&#39;s in PHP 8
                    </h4>
                    <p><br /></p>
                    <p>
                        PHP 8 will support named arguments, as well as constructor property
                        promotion. Those two features will have an immense impact on the
                        amount of boilerplate code you&#39;ll need to write.
                    </p>
                    <p><br /></p>
                    <p>
                        Here&#39;s what a small DTO class would look like in PHP 7.4.
                    </p>
                    <div class="code">
                        <p class="s11" style="padding-left: 8pt;">
                            class <span style=" color: #E22C28;">CustomerData </span>extends
                            <span style=" color: #E22C28;">DataTransferObject</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            {
                        </p>
                        <p class="s11" style="padding-top: 2pt;padding-left: 27pt;">
                            public <span style=" color: #E22C28;">string </span><span style=" color: #2D9B42;">$name</span><span style=" color: #0E0E0E;">; </span>
                            <br>
                            <br>
                            public
                            <span style=" color: #E22C28;">string </span><span style=" color: #2D9B42;">$email</span><span style=" color: #0E0E0E;">; </span>
                            <br>
                            <br>
                            public
                            <span style=" color: #E22C28;">Carbon </span><span style=" color: #2D9B42;">$birth_date</span><span style=" color: #0E0E0E;">;</span>
                        </p>
                        <p><br></p>
                        <p class="s8" style="padding-left: 47pt;text-indent: -19pt;">
                            <span style=" color: #346DF1;">public static function </span><span style=" color: #2D9B42;">fromRequest</span>(
                            <span style=" color: #E22C28;">CustomerRequest </span>$request
                        </p>
                        <p class="s8" style="padding-left: 27pt;">
                            ): <span style=" color: #E22C28;">self </span>{
                        </p>
                        <p class="s11" style="padding-top: 2pt;padding-left: 47pt;">
                            return new self<span style=" color: #0E0E0E;">([</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 66pt;">
                            <span style=" color: #1A1A1A;">&#39;name&#39; </span>=&gt;
                            $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;name&#39;</span>),
                            <br>
                            <span style=" color: #1A1A1A;">&#39;email&#39; </span>=&gt;
                            $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;email&#39;</span>),
                            <br>
                            <span style=" color: #1A1A1A;">&#39;birth_date&#39; </span>=&gt;
                            <span style=" color: #E22C28;">Carbon</span>::<span style=" color: #2D9B42;">make</span>(
                        </p>
                        <p class="s8" style="padding-left: 85pt;">
                            $request-&gt;<span style=" color: #2D9B42;">get</span>(<span style=" color: #1A1A1A;">&#39;birth_date&#39;</span>)
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 66pt;">
                            ),
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 47pt;">
                            ]);
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 27pt;">
                            }
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            }
                        </p>
                        <p><br /></p>
                        <p class="s8" style="padding-left: 8pt;">
                            $data = <span style=" color: #E22C28;">CustomerData</span>::<span style=" color: #2D9B42;">fromRequest</span>($customerRequest);
                        </p>
                    </div>
                    <p>
                        And this is what it would look like in PHP 8.
                    </p>
                    <div class="code">
                        <p class="s11" style="padding-left: 8pt;">
                            class <span style=" color: #E22C28;">CustomerData</span>
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            {
                        </p>
                        <p class="s11" style="padding-top: 2pt;padding-left: 47pt;text-indent: -19pt;">
                            public function <span style=" color: #2D9B42;">__construct</span><span style=" color: #0E0E0E;">( </span>
                            <br>
                            public
                            <span style=" color: #E22C28;">string </span><span style=" color: #2D9B42;">$name</span><span style=" color: #0E0E0E;">, </span>
                            <br>
                            public
                            <span style=" color: #E22C28;">string </span><span style=" color: #2D9B42;">$email</span><span style=" color: #0E0E0E;">, </span>
                            <br>
                            public
                            <span style=" color: #E22C28;">Carbon </span><span style=" color: #2D9B42;">$birth_date</span><span style=" color: #0E0E0E;">,</span>
                        </p>
                        <p class="s8" style="padding-left: 27pt;">
                            ) {}
                        </p>
                        <p class="s8" style="padding-top: 2pt;padding-left: 8pt;">
                            }
                        </p>
                        <p><br /></p>
                        <p class="s8" style="padding-left: 8pt;">
                            $data = <span style=" color: #346DF1;">new </span><span style=" color: #E22C28;">CustomerData</span>(...$customerRequest-&gt;<span style=" color: #2D9B42;">validated</span>());
                        </p>
                    </div>
                    <p>
                        Because data lives at the core of almost every project, it&#39;s one
                        of the most important building blocks. Data transfer objects offer
                        you a way to work with data in a structured, type safe and
                        predictable way.
                    </p>
                    <p><br /></p>
                    <p>
                        You&#39;ll note throughout this book that DTOs are used more often
                        than not. That&#39;s why it was so important to take an in-depth
                        look at them at the start. Likewise, there&#39;s another crucial
                        building block that needs our thorough attention: actions.
                        That&#39;s the topic for the next chapter.
                    </p>
                    <p>
                        …
                    </p>

                </div>
            </div>
            <div class="mt-16">
                @include('partials.priceCard')
            </div>
        </section>


        <div class="">
            <div class="opacity-25 xs:opacity-100 overflow-hidden z-10 absolute top-0 bottom-0 left-0 w-full blend-multiply pointer-events-none">
                <section class="h-full px-8">
                    <div class="h-full max-w-2xl mx-auto flex justify-start">
                        <div class="w-1/3 pr-8">
                            <img style="right:2rem; width:33vw" class="absolute max-w-none h-full object-cover object-right-top" srcset="/images/fragment-800.jpg 800w,
                                    /images/fragment-600.jpg 600w,
                                    /images/fragment-400.jpg 400w" sizes="33vw" alt="Abstract painting" src="/images/fragment-800.jpg">
                        </div>
                        <div>
                </section>
            </div>

            @include('partials.footer')
        </div>
    </main>


</div>


@endsection
