Vim�UnDo� 6E�%��g�4���Ϥ,@ѳu�{��a�L      q        <li class="flex flex-col items-center gap-6 justify-center border-solid border-b-[1px] border-green-200">   
   '                       f��   ) _�                    	       ����                                                                                                                                                                                                                                                                                                                                                 v        f�     �      
         (    <?php foreach ($pages as $page) : ?>5��                        �                     �                     
   �              
       5�_�                           ����                                                                                                                                                                                                                                                                                                                                                 v        f�"     �                * WP_Post[] $terms5��                                             �                                             �                                             5�_�                       
    ����                                                                                                                                                                                                                                                                                                                                                 v        f�)    �               
 * WP_Term5��       
                                        �                                             �                     
                 
       5�_�                    	   #    ����                                                                                                                                                                                                                                                                                                                                                 v        f�0    �      
         -    <?php foreach ($categories as $page) : ?>5��       #                 �                     �       #                 �                     5�_�                           ����                                                                                                                                                                                                                                                                                                                                         g       v   g    f�9     �               l                <?php echo implode("<span>|</span>", wp_get_post_tags($page->ID, ['fields' => 'names'])); ?>5��              M           ^      M               5�_�                           ����                                                                                                                                                                                                                                                                                                                                         g       v   g    f�<     �                               <?php echo ; ?>5��                         ^                     �                         b                     �                         a                     �                         `                     �                         _                     �                     	   ^             	       5�_�      	                 $    ����                                                                                                                                                                                                                                                                                                                                         g       v   g    f�>   	 �               (                <?php echo $category; ?>5��       $                  g                     �       &                 i                    5�_�      
           	      #    ����                                                                                                                                                                                                                                                                                                                                         g       v   g    f�L     �   
          5��    
                                           5�_�   	              
          ����                                                                                                                                                                                                                                                                                                                                         g       v   g    f�N     �                           </span>5��                         �                     5�_�   
                        ����                                                                                                                                                                                                                                                                                                                                         g       v   g    f�[     �             �             5��                                        3       5�_�                            ����                                                                                                                                                                                                                                                                                                                                                 v       f�^     �             5��                          �                     5�_�                            ����                                                                                                                                                                                                                                                                                                                                                 v       f�a     �             �             5��                          �                     5�_�                           ����                                                                                                                                                                                                                                                                                                                                                 v       f�b     �               -            <span class="flex text-sm gap-3">   5                <?php echo $category->description; ?>               </span>5��                         I      x       �       5�_�                            ����                                                                                                                                                                                                                                                                                                                                                 v       f�d    �                 5��                          �                     5�_�                            ����                                                                                                                                                                                                                                                                                                                                                 v       f�p     �             �             5��                          �              �       5�_�                           ����                                                                                                                                                                                                                                                                                                                                                 v       f�s     �               �            <a href="/met-wie/<?php echo $category->slug ?>" class="block px-8 pb-4 text-center font-title"> <?php echo $category->name ?> </a>5��                        �                    5�_�                           ����                                                                                                                                                                                                                                                                                                                                                 v       f�x    �               �            <a href="/wanner/<?php echo $category->slug ?>" class="block px-8 pb-4 text-center font-title"> <?php echo $category->name ?> </a>5��                                              5�_�                            ����                                                                                                                                                                                                                                                                                                                                                 v       f�~     �                   l            <a href="<?php echo get_permalink($page->ID) ?>" class="block px-8 pb-4 text-center font-title">   0                <?php echo $page->post_title  ?>               </a>5��                         y      �               5�_�                            ����                                                                                                                                                                                                                                                                                                                                                 v       f�    �                 5��                          y                     5�_�                           ����                                                                                                                                                                                                                                                                                                                                                 v       f��    �                           <?php endif; ?>5��                         �                     5�_�                      0    ����                                                                                                                                                                                                                                                                                                                   0                            v       f��     �               1                <span class="flex text-sm gap-3">   9                    <?php echo $category->description; ?>5��       1                z                    5�_�                       0    ����                                                                                                                                                                                                                                                                                                                   0                            v       f��    �               W                <span class="flex text-sm gap-3"> <?php echo $category->description; ?>                   </span>5��       W                �                    5�_�                       �    ����                                                                                                                                                                                                                                                                                                                   0                            v       f��    �               �            <a href="/wanneer/<?php echo $category->slug ?>" class="block px-8 pb-4 text-center font-title"> <?php echo $category->name ?> </a>5��       �                  U                     5�_�                            ����                                                                                                                                                                                                                                                                                                                   0                            v        f��    �                 �             �                <?php       /**    * WP_Term[] $categories    */   ?>5��                                  *               �                                          ?       5�_�                            ����                                                                                                                                                                                                                                                                                                                   0                            v        f��    �             5��                                                5�_�                    
   <    ����                                                                                                                                                                                                                                                                                                                   0          !          "       v   "    f��   ) �   	            q        <li class="flex flex-col items-center gap-6 justify-center border-solid border-b-[1px] border-green-200">5��    	   <                 �                     5�_�                   
   '    ����                                                                                                                                                                                                                                                                                                                   0          !          "       v   "    f�V   $ �   	            n        <li class="flex flex-col items-end gap-6 justify-center border-solid border-b-[1px] border-green-200">5��    	   '                 �                     5�_�                   
   '    ����                                                                                                                                                                                                                                                                                                                   0          !          "       v   "    f�!     �   	            d        <li class="flex flex-col gap-6 justify-center border-solid border-b-[1px] border-green-200">5��    	                      �                      5�_�                     
        ����                                                                                                                                                                                                                                                                                                                   0          !          "       v   "    f�P     �   	            e        <li class="flex flex-col  gap-6 justify-center border-solid border-b-[1px] border-green-200">5��    	                      �                      �    	   !                  �                      5�_�                       *    ����                                                                                                                                                                                                                                                                                                                                                 v       f��     �               .                    <?php echo $category->; ?>5��       )                 �                    5�_�                             ����                                                                                                                                                                                                                                                                                                                                                 v        f�     �                 �             �                /**    * @var WP_Term[] $categories    */   ?>5��                                  %               �                                          (       5��