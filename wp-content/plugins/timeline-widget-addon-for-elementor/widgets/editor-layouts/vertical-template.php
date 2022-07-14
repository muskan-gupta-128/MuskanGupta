<div class="twae-vertical twae-wrapper {{{ timeline_layout_wrapper }}}">
        <div class="twae-timeline-centered twae-timeline-sm twae-line {{{ timeline_layout }}}">
        
                <span class="twae-year-container">
                    <span view.getrenderattributestring year_key>{{{ item.twae_year }}}</span>
                </span>
                
            <article class="twae-timeline-entry {{{ story_alignment }}}"><div class="twae-timeline-entry-inner">
                    <div class="twae-label-extra-label">
                        <span view.getrenderattributestring date_label_key>{{{ item.twae_date_label }}}</span>
                        <span view.getrenderattributestring extra_label_key>{{{ item.twae_extra_label }}}</span>
                    </div>
                    <div class="twae-icon">
                    
                        {{{ twaeiconHTML.value }}}
                    
                        <i class="{{ item.twae_story_icon.value }}" aria-hidden="true"></i>
                    
                    
                    </div>
                    <div class="twae-data-container {{{ no_border }}}">
                        <span view.getrenderattributestring title_key>{{{ item.twae_story_title}}}</span>
                        <div class="twae-timeline-img"><img src="https://muskan-gupta-128.github.io/MuskanGupta/wp-content/plugins/timeline-widget-addon-for-elementor/widgets/editor-layouts/{{{ image_url }}}"></div>
                        <div view.getrenderattributestring description_key>{{{ item.twae_description }}}</div>
                    </div>
                </div>
            </article>
</div>
    </div>