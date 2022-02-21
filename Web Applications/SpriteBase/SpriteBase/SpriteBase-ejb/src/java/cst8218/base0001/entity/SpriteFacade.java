/**********************************************************************
 * Filename: SpriteFacade.java                                       
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
/*
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cst8218.base0001.entity;

import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;

/**
 *
 * @author tgk
 */
@Stateless
public class SpriteFacade extends AbstractFacade<Sprite> {
    @PersistenceContext(unitName = "SpriteBasePU")
    private EntityManager em;

    @Override
    protected EntityManager getEntityManager() {
        return em;
    }

    public SpriteFacade() {
        super(Sprite.class);
    }
    
}
