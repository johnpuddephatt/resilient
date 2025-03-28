@extends('layouts.app')

@section('content')
    {{-- <div
        class="fixed z-10 bottom-0 h-[25vh] left-0 right-0  pointer-events-none bg-linear-to-t/srgb  from-black/80 to-transparent ">
    </div> --}}

    <div class="z-10 fixed  bottom-[-7.5vh] left-0 right-0 h-[25vh] rotate-180 pointer-events-none "
        style="background-image: url('{{ asset('images/gradient.png') }}'); background-size: contain;">
    </div>

    <div class="z-10 fixed  top-0 left-0 right-0 h-[150px] pointer-events-none "
        style="background-image: url('{{ asset('images/gradient.png') }}'); background-size: contain;">
    </div>

    <header class="h-[6.25vh] flex items-center  px-4  md:px-8 lg:px-12 fixed top-0 left-0 right-0 z-10 text-white">
        <a href="#home" class="max-w-32 md:max-w-44">
            <x-logo id="header-logo" class="invisible animate-duration-500 w-auto h-4 md:h-5" />
        </a>
        <nav class="ml-auto flex gap-3 md:gap-4 lg:gap-8">
            <a href="#project" class=" hover:text-primary">
                <span class="md:hidden">Project</span>
                <span class="hidden md:inline">About the project</span>
            </a>
            <a href="#film" class=" hover:text-primary">
                <span class="md:hidden">Film</span>
                <span class="hidden md:inline">About the film</span>
            </a>
            <a href="#context" class="hover:text-primary">
                <span class="md:hidden">Context</span>
                <span class="hidden md:inline">Context &amp; Purpose</span>
            </a>
            <a href="#partners" class="hover:text-primary">
                <span class="md:hidden">Partners</span>
                <span class="hidden md:inline">Funders &amp; Partners</span>
            </a>
        </nav>
    </header>
    <main class="" id="home">

        <!-- Hero Section -->
        <section
            class="relative overflow-hidden flex items-center h-screen py-16 md:py-24 after:absolute after:opacity-30 after:pointer-events-none after:animate-pulsar after:inset-0 after:bg-(image:--noise)">

            <div class="overflow-hidden absolute top-[6.25%] left-0 w-full bottom-[6.25%] h-full">
                <div class="  animate-hue-rotate ml-auto w-1/2 h-[17.5%]  bg-linear-(--band) -translate-x-[25%]">
                </div>
                <div
                    class=" hover:translate-x-[-15%] transition duration-2000 animate-hue-rotate ml-auto  w-1/2 h-[17.5%] animate-delay-2500  bg-linear-(--band) -translate-x-[10%]">
                </div>
                <div
                    class="hover:translate-x-[-5%] transition duration-2000  animate-hue-rotate ml-auto  w-1/2 h-[17.5%] animate-delay-1000  bg-linear-(--band)">
                </div>
                <div
                    class="hover:translate-x-[-20%]  transition duration-2000 animate-hue-rotate ml-auto  w-1/2 h-[17.5%]  animate-delay-3000  bg-linear-(--band) -translate-x-[25%]">
                </div>
                <div
                    class="hover:translate-x-[-35%]  transition duration-2000  animate-hue-rotate ml-auto  w-1/2 h-[17.5%] animate-delay-2000 bg-linear-(--band) -translate-x-[10%]">
                </div>
            </div>
            <div class="overflow-hidden container pointer-events-none  relative ">
                <x-logo class="animate w-[calc(5/3*100%)] lg:w-[calc(4/3*100%)] h-auto block" />
            </div>
        </section>
        <div data-scene data-scene-hook="onCenter" data-scene-duration="200%">
            <section class=" min-h-[60vh] flex origin-top-left flex-col justify-center md:items-center container ">
                <p data-animate-position="start" data-animate data-animate-from-alpha="0" data-animate
                    data-animate-to-alpha="1" data-animate-from-y="50" data-animate-from-scale="0.9"
                    data-animate-to-scale="1" data-animate-to-y="0" data-animate-duration="15"
                    class="max-w-xs md:max-w-none text-balance text-4xl">Adversity is not destiny.</p>
                <img data-animate-position="end" data-animate data-animate-from-alpha="0" data-animate-to-alpha="1"
                    data-animate-from-y="000" data-animate-to-y="800" data-animate-from-rotation="0"
                    data-animate-to-rotation="20" data-animate-duration="25"
                    class="-z-10 w-full -left-[20%] top-[80%] will-change-transform origin-center  absolute "
                    src="{{ asset('images/intro.png') }}" />
            </section>

            <!-- First Content Section -->
            <section id="project" class="pb-16 pt-[20vh] md:py-[20vh] flex items-center  container">
                <div class="grid w-full md:grid-cols-2 gap-6  md:gap-24">
                    <div>
                        <h2 class="text-sm uppercase text-primary mb-2">Introducing the project</h2>
                        <h3 class="max-w-lg text-balance text-2xl mb-8">RESILIENT uses original cinema to engage vulnerable
                            young people at a critical moment in their lives.</h3>
                    </div>
                    <div class="prose md:mt-6">
                        <p>RESILIENT is a creative learning intervention for young people aged 15 - 18, who are under the
                            care
                            of
                            NHS child and adolescent mental health services (CAMHS).
                        </p>
                        <p>
                            It uses a purpose-made, short film thriller to explore adversity, self-worth and the power of
                            human connection – so as to help young people prepare for life after they are discharged from
                            care.
                        </p>
                        <p>
                            RESILIENT is a collaboration between current and former CAMHS patients, specialist CAMHS
                            teachers
                            and clinicians, homelessness researchers, and an Oscar-winning team of filmmakers. It is
                            independently evaluated by the Anna Freud Centre for Children and Families’ Evidence Based
                            Practice
                            Unit. RESILIENT is hosted by the homeless and
                            inclusion health charity Pathway.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Second Content Section -->
            <section data-scene data-scene-hook="onCenter" data-scene-duration="100%" id="film"
                class="py-16 md:py-[20vh] container">
                <div>
                    <h2 class="text-sm uppercase text-primary mb-2">Introducing the film</h2>
                    <h3 class="text-2xl mb-8">A quest for love, freedom and survival</h3>
                </div>
                <div class="grid md:grid-cols-2 gap-6  md:pt-[10vh] md:gap-24  items-center">
                    <div>
                        <img class="w-1/2 md:mx-auto h-auto" sizes="(max-width: 48rem) 100vw, 48rem"
                            {{ glide()->src('images/poster.jpg') }} />
                    </div>

                    <div class="prose ">
                        <p><em>The Mouse</em> is a tender love story concealed within a fierce urban thriller. It tells the
                            story of
                            a
                            fugitive boy battling to catch a mouse from the London Underground and give it to the girl he
                            loves.
                        </p>
                        <p>On his journey the hero Jakub confronts trauma, mental illness and homelessness, and these themes
                            are
                            discussed and explored in the learning sessions and creative exercises that interact with the
                            film.
                        </p>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 pt-3 md:pt-[10vh] gap-24  items-center">

                    <div class="prose">
                        <p><em>The Mouse</em> was made by a team of leading film industry professionals, including Judy
                            Counihan,
                            producer of the two Oscar-winning films <em>No Man’s Land</em> and <em>Antonia’s Line</em>;
                            Walter Donohue, Story
                            Editor of the iconic <em>Paris</em>, <em>Texas</em> and <em>28 Days Later</em>; and Casting
                            Director Des Hamilton, renowned
                            for
                            his street casting on films such as <em>Morvern Callar</em>, <em>This is England</em> and
                            <em>JoJo Rabbit</em>. Lead actor
                            in
                            <em>The Mouse</em>, Finn Bennett, went on to star opposite Jodie Foster in <em>True Detective,
                                Night
                                Country</em>.
                        </p>
                    </div>
                    <div class="md:-ml-12 md:w-[calc(100%+3rem)] relative">
                        <img data-animate-position="end" data-animate data-animate-from-alpha="0" data-animate-to-alpha="1"
                            data-animate-duration="10" data-animate-from-y="-100" data-animate-to-y="0"
                            data-animate-from-rotation="20" data-animate-to-rotation="0"
                            class="-translate-y-full md:-translate-y-1/2 w-1/2 absolute lg:-translate-x-1/3  h-auto"
                            src="{{ asset('images/ticket.svg') }}" />
                        <img class="w-full h-auto" sizes="(max-width: 48rem) 100vw, 48rem"
                            {{ glide()->src('images/car-window.jpg') }} />
                    </div>
                </div>

            </section>
        </div>

        <!-- Third Content Section -->
        <section id="context" data-scene data-scene-hook="onCenter" data-scene-duration="150%"
            class="pt-16 md:pt-[20vh] pb-8 md:pb-[10vh]  overflow-hidden space-y-12 container">
            <div>
                <h2 class="text-sm uppercase text-primary mb-2">Context & Purpose</h2>
                <h3 class="text-2xl mb-8">A unique opportunity</h3>
                <p class="font-medium max-w-7xl text-balance text-lg">As they embark on their early adult lives, young
                    people who have experienced abuse and neglect as children, and developed serious mental illness as
                    teenagers, are at the
                    highest possible risk of falling into crises of isolation, despair, and rough sleeping.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 items-center  md:gap-24">
                <div
                    class="w-2/3 mx-auto  md:w-full relative -translate-y-8 md:-translate-y-24 translate-x-1/3 rotate-[-25deg]">
                    <img data-animate-position="start" data-animate data-animate-from-alpha="0" data-animate-from-y="-200"
                        data-animate-duration="3" src="{{ asset('images/schism-left.png') }}" />
                    <img data-animate-position="start" data-animate data-animate-from-alpha="0" data-animate-to-alpha="1"
                        data-animate-to-y="-200" data-animate-duration="3"
                        class="right-full absolute top-[50%] border-dashed border-white/30"
                        src="{{ asset('images/schism-right.png') }}" />
                </div>

                <div class="prose">

                    <p>Many of these young people are treated by NHS child and adolescent mental health services (CAMHS),
                        for
                        sustained periods of time, as they approach the age of eighteen. RESILIENT has been created to help
                        staff at these services fulfil the unique opportunity they have – to work creatively and generously
                        with these young people, and help them navigate safely through the next phase of their lives.
                    </p>
                    <p>
                        Pathway is collaborating now with CAMHS services in England to support their use of RESILIENT. And
                        we are developing a series of related projects and interventions – in partnership with experts by
                        experience, CAMHS services, researchers, and creative professionals – to further help NHS child and
                        adolescent mental healthcare services meet the needs of the most vulnerable children under their
                        care.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 pt-16 md:pt-[20vh] items-center gap-6  md:gap-24">
                <div>
                    <blockquote class="!max-w-lg text-xl font-medium prose text-white mb-6">
                        <p>“Watching and discussing <em>The Mouse</em> has engaged and stimulated our most hard-to-reach
                            young
                            people.</p>
                        <p>I think it’s an excellent resource.”</p>
                    </blockquote>
                    <p class="text-sm max-w-md text-primary">Teacher, Simmons House Adolescent Unit
                        (Whittington Health NHS).</p>
                </div>
                <div class="md:-ml-12 md:w-[calc(100%+3rem)]">
                    <img class="w-full h-auto" sizes="(max-width: 48rem) 100vw, 48rem"
                        {{ glide()->src('images/examined-by-psychiatrist.jpg') }} />
                </div>
            </div>
        </section>

        <!-- Funders Section -->
        <section id="partners" class="border-t border-gray-700 pt-8 md:pt-[10vh] pb-8 md:pb-[10vh] container ">
            <div class="grid md:grid-cols-2 gap-6  md:gap-24">
                <div>
                    <h2 class="text-xs uppercase text-primary mb-2">Funders &amp; partners</h2>

                    <h3 class="text-2xl mb-4 md:mb-8">Our funders</h3>
                </div>
                <div>
                    <img class="pt-6 w-full h-auto max-w-lg" sizes="(max-width: 48rem) 100vw, 48rem"
                        {{ glide()->src('images/logos2.png') }} />
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section class="border-b border-gray-700 pb-6 md:pb-[10vh] container">
            <div class="grid md:grid-cols-2 gap-6  md:gap-24">
                <div>
                    <h3 class="text-2xl mb-4 md:mb-8">Our partners</h3>
                </div>
                <div class="prose">
                    <p>RESILIENT was developed in partnership with patients, teachers and clinicians at Simmons House
                        Adolescent Unit
                        (Whittington Health NHS) in Haringey, North-East London.</p>
                    <p>Independent evaluation research is conducted by the Anna Freud Centre for Children and Families’
                        Evidence-Based Practice Unit.</p>
                </div>
            </div>
        </section>

        <!-- Final Section -->
        <section class="pt-6 md:pt-[10vh] pb-12 md:pb-[20vh] container">
            <div class="grid md:grid-cols-2 gap-6 items-center md:gap-24">
                <div>
                    <h3 class="text-xl max-w-lg mb-6">
                        “A well-considered innovation with the potential to make a lasting contribution to the
                        welfare of young people with mental illness.”</h3>
                    <p class="max-w-md text-sm text-primary">Endorsement for RESILIENT by the Royal College of
                        Psychiatrists’ Faculty of Child & Adolescent Psychiatry.</p>
                </div>
                <div class="md:-ml-12 md:w-[calc(100%+3rem)]">
                    <img class="w-full h-auto" sizes="(max-width: 48rem) 100vw, 48rem"
                        {{ glide()->src('images/running-in-tunnel.jpg') }} />
                </div>

            </div>
        </section>

        <div class="flex justify-center pt-32 pb-[15vh] md:py-[20vh]">
            <a target="_blank" href="https://pathway.org.uk">
                <x-pathway-logo class="w-48 lg:w-64 h-auto" />
            </a>

        </div>
    </main>
@endsection
