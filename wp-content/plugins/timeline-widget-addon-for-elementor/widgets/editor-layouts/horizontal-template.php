<div id="twae-horizontal-wrapper" class="twae-wrapper twae-horizontal swiper-container" dir="" data-slidestoshow="{{{sidesToShow}}}" data-autoplay="{{{autoplay}}}">
    <div class="twae-horizontal-timeline swiper-wrapper">
        
            <div class="swiper-slide {{{sidesHeight}}}">	
                
                
                        <div class="twae-year-container">
                            <span view.getrenderattributestring year_key>{{{ item.twae_year }}}</span>
                        </div>
                        
                    <div class="twae-label-extra-label"><div>
                        <span view.getrenderattributestring date_label_key>{{{ item.twae_date_label }}}</span>
                        <span view.getrenderattributestring extra_label_key>{{{ item.twae_extra_label }}}</span>
                    </div></div>		
                    <div class="twae-icon">
                        
                            {{{ twaeiconHTML.value }}}
                        
                            <i class="{{ item.twae_story_icon.value }}" aria-hidden="true"></i>
                        
                            
                    </div>
                    <div class="twae-story-info {{{ no_border }}}">              
                    <div class="twae-timeline-img"><img src="https://muskan-gupta-128.github.io/MuskanGupta/wp-content/plugins/timeline-widget-addon-for-elementor/widgets/editor-layouts/{{{ image_url }}}"></div>             
                    <span view.getrenderattributestring title_key>{{{ item.twae_story_title}}}</span>
                    <div view.getrenderattributestring description_key>{{{ item.twae_description }}}</div>
                    </div>
            </div>
            
    </div>
    <!-- Add Pagination -->        
    <div class="twae-pagination"></div>
    <!-- Add Arrows -->
    
    <div class="twae-button-prev twae-icon-left-open-big"></div>
    <div class="twae-button-next twae-icon-right-open-big"></div>
</div>