<?php
$menus = $this->db->order_by('sequence')->join('menu_access', 'menu_access.id_menu=menus.id_menu')->get_where('menus', ['id_parrent' => 0, 'menu_access.id_role' => $this->session->userdata('id_role')]);

foreach ($menus->result() as $mn) :
    $id_parrent = $this->db->order_by('sequence')->join('menu_access ', 'menu_access.id_menu=menus.id_menu')->get_where('menus', ['id_parrent' => $mn->id_menu, 'menu_access.id_role' => $this->session->userdata('id_role')]);

    $menu_active = $this->session->userdata('menu_active');

    if ($menu_active !== '') {
        if ($menu_active === $mn->slug) {
            $menu_active = 'active';
        } else {
            $menu_active = '';
        }
    }

    $group = explode(" ", $mn->name);
    $group_menu = join("-", $group);

    if ($id_parrent->num_rows() > 0) : ?>
        <li class="nav-item">
            <a class="nav-link menu-link <?= $menu_active; ?>" href="#sidebar<?= $group_menu; ?>" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                <i class="<?= $mn->icon; ?>"></i> <span><?= $mn->name; ?></span>
            </a>

            <div class="collapse menu-dropdown" id="sidebar<?= $group_menu; ?>">
                <ul class="nav nav-sm flex-column">
                    <?php
                    foreach ($id_parrent->result() as $sb) :
                        $sub_menu_active = $this->session->userdata('sub_menu_active');

                        if ($sub_menu_active !== '') {
                            if ($sub_menu_active === $sb->slug) {
                                $sub_menu_active = 'active';
                            } else {
                                $sub_menu_active = '';
                            }
                        } ?>
                        <li class="nav-item">
                            <a href="<?= $sb->slug; ?>" class="nav-link <?= $sub_menu_active; ?>"> <?= $sb->name; ?> </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </li>

    <?php else : ?>
        <li class="nav-item">
            <a class="nav-link menu-link <?= $menu_active; ?>" href="<?= $mn->slug; ?>">
                <i class="<?= $mn->icon; ?>"></i> <span data-key="t-widgets"><?= $mn->name; ?></span>
            </a>
        </li>

<?php
    endif;
endforeach;

?>