Vim�UnDo� �	+����\GX�/�w���tz��6(O)�C   -                                   f�F   ) _�                    5       ����                                                                                                                                                                                                                                                                                                                :          ;          '           v        f�j�    �   4   6          N        return file_get_contents(__DIR__ . '/templates/anchor-links.tpl.php');5��    4           N       T   5      N       T       5�_�                    :       ����                                                                                                                                                                                                                                                                                                                :          ;          '           v        f�j�    �   9   ;          ?        return esc_html__('Add new Anchor Link', 'et_builder');5��    9           ?       E   �      ?       E       5�_�                    5       ����                                                                                                                                                                                                                                                                                                                :          ;          '           v        f�kc   " �   4   6          T        /* return file_get_contents(__DIR__ . '/templates/anchor-links.tpl.php'); */5��    4           T       N   5      T       N       5�_�                    8        ����                                                                                                                                                                                                                                                                                                                :          ;          8           v        f�p�     �   7   9   >      (    public function add_new_child_text()       {   E        /* return esc_html__('Add new Anchor Link', 'et_builder'); */       }5��    7                     �      z               5�_�      	              7        ����                                                                                                                                                                                                                                                                                                                           8          8           v        f�p�     �   6   7           5��    6                      �                     5�_�      
           	   7        ����                                                                                                                                                                                                                                                                                                                           7          7           v        f�p�     �   6   7           5��    6                      �                     5�_�   	              
           ����                                                                                                                                                                                                                                                                                                                           )                      v        f�p�   $ �          9          function get_fields()       {           return [];       }           function before_render()       {   "        global $et_pb_item_number;            $et_pb_item_number  = 1;       }           /**5��                          .      �               5�_�   
                       ����                                                                                                                                                                                                                                                                                                                                                 v        f�p�   ) �   
             /        $this->child_slug = 'anchor_link_item';5��    
                      ;      0               5�_�                            ����                                                                                                                                                                                                                                                                                                                                     "   ;       v   >    f�E     �               -   <?php       +class AnchorLinks extends ET_Builder_Module   {       function init()       {   N        $this->name       = esc_html__('_Nobeach Anchor Links', 'et_builder');   N        $this->plural     = esc_html__('_Nobeach Anchor Links', 'et_builder');   +        $this->slug       = 'anchor_links';   !        $this->vb_support = 'on';       }           /**        * Disable fields        */   0    public function get_advanced_fields_config()       {           return array(   &            'background'     => false,   &            'borders'        => false,   &            'box_shadow'     => false,   &            'button'         => false,   &            'filters'        => false,   &            'fonts'          => false,   &            'margin_padding' => false,   %            'max_width'      => false   
        );       }           /**   !     * Renders the module output.        *   6     * @param  array  $attrs       List of attributes.   ;     * @param  string $content     Content being processed.   T     * @param  string $render_slug Slug of module that is used for rendering output.        *        * @return string        */   :    public function render($attrs, $content, $render_slug)       {   N        return file_get_contents(__DIR__ . '/templates/anchor-links.tpl.php');       }   }       new AnchorLinks();5�5�_�                    
       ����                                                                                                                                                                                                                                                                                                                                                 v        f�p�     �   	           5��    	                            "               5�_�   
                         ����                                                                                                                                                                                                                                                                                                                                                 v        f�p�     �               5��                          .                     5�_�                           ����                                                                                                                                                                                                                                                                                                                :          ;          8          v       f�e�    �   
             5        /* $this->child_slug = 'anchor_link_item'; */5��    
           /       5   ;      /       5       5�_�                    8       ����                                                                                                                                                                                                                                                                                                                :          (          $           v        f�e�    �   7   9          .    /* public function add_new_child_text() */�   8   :              /* { */�   9   ;          E    /*     return esc_html__('Add new Anchor Link', 'et_builder'); */�   :   <              /* } */5��    7           (       .   �      (       .       �    8                     �                    �    9           ?       E   �      ?       E       �    :                                         5�_�                     $        ����                                                                                                                                                                                                                                                                                                                :          (          $           v        f�e�    �   #   %          "    /* function before_render() */�   $   &              /* { */�   %   '          (    /*     global $et_pb_item_number; */�   &   (          &    /*     $et_pb_item_number  = 1; */�   '   )              /* } */5��    #                  "   n             "       �    $                     �                    �    %           "       (   �      "       (       �    &                   &   �              &       �    '                     �                    5��