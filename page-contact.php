<?php
/* Template Name: Contact */
?>
<?php get_header(); ?>
<section class="py-16 bg-gray-50">
    <style>
        input[type="text"], input[type="email"], input[type="tel"], textarea {
            border: 1px solid #D1D5DB;
            color: #1F2937;
            font-size: 1rem;
            border-radius: 0.75rem;
            transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            display: block;
            width: 100%;
            padding: 1.5rem 2rem;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        input:focus, textarea:focus {
            border-color: #EF4444;
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.3);
            outline: none;
        }

        input[type="submit"] {
            background-color: #EF4444;
            color: #FFFFFF;
            border: none;
            cursor: pointer;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"]:hover, input[type="submit"]:focus {
            background-color: #DC2626;
            transform: translateY(-1px);
        }
    </style>
    <div class="max-w-6xl mx-auto p-4 md:p-16 xl:p-20">
        <div class="lg:w-2/3 space-y-5 text-center mx-auto">
            <h1 class="text-gray-800 uppercase tracking-widest font-medium text-4xl">
                Date de contact
            </h1>
            <div class="h-0.5 bg-red-500 w-14 mx-auto"></div>
            <p class="text-gray-600 text-base leading-6">
                Pentru mai multe informatii despre serviciile Gegi sau reclamatii, folositi informatiile de mai jos:
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-16">
            <div>
                <address>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            GEGI SRL
                        </h2>
                        <p class="text-gray-500 text-sm leading-6">
                            Strada Transilvaniei nr.7
                            <br>
                            Autogara GEGI
                            <br>
                            Tecuci, Romania
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            Informatii miscare
                        </h2>
                        <a href="tel:0236820031" class="text-gray-500 text-sm leading-6 hover:text-gray-800">
                            0236 820 031
                        </a>
                        <br>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            Telefon Tecuci
                        </h2>
                        <a href="tel:+40752105000" class="text-gray-500 text-sm leading-6 hover:text-gray-800">
                            +40 752 105 000
                        </a>
                        <br>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            Telefon Barlad
                        </h2>
                        <a href="tel:+40746958888" class="text-gray-500 text-sm leading-6 hover:text-gray-800">
                            +40 746 958 888
                        </a>
                        <br>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            Telefon Galati
                        </h2>
                        <a href="tel:+40729288544" class="text-gray-500 text-sm leading-6 hover:text-gray-800">
                            +40 729 288 544
                        </a>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            Email
                        </h2>
                        <a href="mailto:autogara@gegi.ro" class="text-gray-500 text-sm leading-6 hover:text-gray-800">
                            autogara@gegi.ro
                        </a>
                </address>
            </div>
            <div class="lg:col-span-2">
                <div class="contact-form bg-white p-8 rounded-lg shadow-lg">
                <form action="<?php echo get_template_directory_uri(); ?>/contact-form-handler.php" method="post">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-col">
                                <label for="name" class="block text-gray-700 font-medium mb-2">
                                    Numele Dumneavoastra/ Compania:
                                </label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name" 
                                    class="border border-gray-300 text-gray-900 text-base rounded-xl transition duration-200 block w-full p-6 pl-8" 
                                    placeholder="Introduceti numele..."
                                />
                            </div>
                            <div class="form-col">
                                <label for="email" class="block text-gray-700 font-medium mb-2">
                                    Email:
                                </label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="border border-gray-300 text-gray-900 text-base rounded-xl transition duration-200 block w-full p-6 pl-8"
                                    placeholder="Introduceti adresa..."
                                />
                            </div>
                            <div class="form-col">
                                <label for="phone" class="block text-gray-700 font-medium mb-2">
                                    Telefon:
                                </label>
                                <input
                                    type="tel"
                                    name="phone"
                                    id="phone"
                                    class="border border-gray-300 text-gray-900 text-base rounded-xl transition duration-200 block w-full p-6 pl-8"
                                    placeholder="+40..."
                                />
                            </div>
                            <div class="form-col">
                                <label for="subject" class="block text-gray-700 font-medium mb-2">
                                    Subiect:
                                </label>
                                <input
                                    type="text"
                                    name="subject"
                                    id="subject"
                                    class="border border-gray-300 text-gray-900 text-base rounded-xl transition duration-200 block w-full p-6 pl-8"
                                    placeholder="Scurta descriere..."
                                />
                            </div>
                        </div>
                        <div class="form-col mt-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">
                                Mesaj:
                            </label>
                            <textarea
                                name="message"
                                id="message"
                                class="border border-gray-300 text-gray-900 text-base rounded-xl transition duration-200 block w-full p-6 pl-8"
                                rows="5"
                                placeholder="Mesajul dumneavoastra..."
                            ></textarea>
                        </div>
                        <div class="form-col text-center mt-6">
                            <input
                                type="submit"
                                id="submit"
                                name="send"
                                class="inline-block px-6 py-3 rounded-xl text-base cursor-pointer select-none outline-none transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 bg-red-500 text-white hover:bg-red-600"
                                value="Trimitere Mesaj"
                            />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
