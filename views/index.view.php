<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- component -->
        <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
            <div class="flex flex-col h-full">
                <!-- Table -->
                <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="px-5 py-4 border-b border-gray-100">
                        <h2 class="font-semibold text-gray-800">Customers</h2>
                    </header>
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    <tr>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Идентификатор</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Заголовок</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Выполнено</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100">
                                    <?php foreach($rows as $row) : ?>
                                        <tr>
                                            <td class="p-2 whitespace-nowrap">
                                                <?php echo $row['id'] ?>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <?php echo $row['title'] ?>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <?php echo $row['is_done'] ? 'Да' : 'Нет' ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                                <td class="p-2 whitespace-nowrap">
                                    <form method="POST">
                                        <input name="todo" class="w-full py-2 px-4 rounded-md block border border-gray-600 my-4">
                                        <button type="submit" class="px-4 py-2 bg-green-500 text-white font-bold rounded-md">Добавить</button>
                                    </form>
                                </td>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>