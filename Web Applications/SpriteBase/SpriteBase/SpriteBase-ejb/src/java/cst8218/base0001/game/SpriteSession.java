/**********************************************************************
 * Filename: SpriteSession.java                                       
 * Author: Rishabh Kansara, Saiharshal Nadiminti                                          
 * StudentNo:  040979380, 040982223                                             
 * Course Name/Number: Web Enterprise Applications   CST8218                              
 * Lab Sect: 301                                                     
 * Assignment #:2
 * Assignment name: Sprite Base
 * Due Date: August 11 2021                                           
 * Submission Date: August 11 2021 
 * Professor: Yamen Nasrallah          
 *********************************************************************/

package cst8218.base0001.game;

import cst8218.base0001.entity.Sprite;
import java.awt.Color;
import java.awt.event.MouseEvent;
import java.util.List;
import java.util.Random;
import javax.ejb.EJB;
import javax.ejb.Stateful;
import javax.ejb.Stateless;

/**
 *
 * @author tgk
 */
@Stateful
public class SpriteSession implements SpriteSessionRemote {

    public static final Random random = new Random();
    Color color = new Color(random.nextInt(255), random.nextInt(255), random.nextInt(255));
    @EJB
    private SpriteGame spriteGame;

    public List<Sprite> getSpriteList() {
        return spriteGame.getSpriteList();
    }

    @Override
    public void newSprite(MouseEvent event) {
        spriteGame.newSprite(event, color);
    }
    @Override
    public int getHeight() {
        return spriteGame.HEIGHT;
    }
    @Override
    public int getWidth() {
        return spriteGame.WIDTH;
    }
}
