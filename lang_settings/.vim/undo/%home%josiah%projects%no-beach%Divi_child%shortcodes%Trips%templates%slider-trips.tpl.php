Vim�UnDo� F�#Ģ	 ����'w�Q������T׸Hsޛ      h            <div class="flex text-sm font-light text-green-400 gap-4"> <?php the_category("|") ?> </div>                              f�"M    _�                            ����                                                                                                                                                                                                                                                                                                                                                             f���   	 �             5��                                                  5�_�                       W    ����                                                                                                                                                                                                                                                                                                                                                             f�"
     �               ]            <?php echo get_the_post_thumbnail(null, "large", ["class" => "w-[26.875rem]"]) ?>5��       W                  A                     5�_�                       [    ����                                                                                                                                                                                                                                                                                                                                                             f�"    �               b            <?php echo get_the_post_thumbnail(null, "large", ["class" => "w-[26.875rem] h-[]"]) ?>5��       [                  E                     �       \                 F                    5�_�                            ����                                                                                                                                                                                                                                                                                                                               g                  v        f�"K     �               h            <div class="flex text-sm font-light text-green-400 gap-4"> <?php the_category("|") ?> </div>�             5��               h           R      h               �                         R              �       5�_�                             ����                                                                                                                                                                                                                                                                                                                                                 v        f�"L    �               J                <div class="flex text-sm font-light text-green-400 gap-4">   �                    <?php echo implode("<span>|</span>", array_slice(wp_get_post_categories(get_the_ID(), ['fields' => 'names']), 0, 3)); ?>                   </div>5��                         R      �       �       5��